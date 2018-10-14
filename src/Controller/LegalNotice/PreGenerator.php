<?php

/*
 * This file is part of RGPD project.
 *
 * (c) Sébastien CHOMY <sebastien.chomy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller\LegalNotice;

use App\Form\LegalNotice\PreForm;
use App\Model\LegalNotice\Params;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Twig\Environment as Twig;

/**
 * Class PreGenerator.
 */
class PreGenerator
{
    /** @var FormFactoryInterface */
    private $formFactory;

    /** @var RouterInterface */
    private $router;

    /** @var SessionInterface */
    private $session;

    /** @var Twig */
    private $twig;

    /**
     * PreGenerator constructor.
     *
     * @param FormFactoryInterface $formFactory
     * @param RouterInterface      $router
     * @param SessionInterface     $session
     * @param Twig                 $twig
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        RouterInterface $router,
        SessionInterface $session,
        Twig $twig
    ) {
        $this->formFactory = $formFactory;
        $this->router = $router;
        $this->session = $session;
        $this->twig = $twig;
    }

    /**
     * @param Request $request
     *
     * @throws \InvalidArgumentException
     * @throws \Symfony\Component\Form\Exception\LogicException
     * @throws \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     * @throws \Symfony\Component\Routing\Exception\InvalidParameterException
     * @throws \Symfony\Component\Routing\Exception\MissingMandatoryParametersException
     * @throws \Symfony\Component\Routing\Exception\RouteNotFoundException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     *
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        if ($this->session->has('app.legalNotice.params')) {
            $params = $this->session->get('app.legalNotice.params');
        } else {
            $params = new Params();
        }

        $form = $this->formFactory->create(PreForm::class, $params);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->session->set('app.legalNotice.params', $params);

            return new RedirectResponse($this->router->generate('app_legal_notice_generator'));
        }

        return new Response(
            $this->twig->render(
                'App\legalNotice\PreForm.html.twig',
                ['form' => $form->createView()]
            )
        );
    }
}

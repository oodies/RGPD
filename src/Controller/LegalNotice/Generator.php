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

use App\Form\LegalNotice\Form as LegalNoticeForm;
use App\Manager\HostProviderManager;
use App\Model\LegalNotice\LegalNotices;
use App\Model\LegalNotice\Params;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Twig\Environment as Twig;

/**
 * Class Generator.
 */
class Generator
{
    /** @var FormFactoryInterface */
    private $formFactory;

    /** @var HostProviderManager */
    private $hostProviderManager;

    /** @var Twig */
    private $twig;

    /** @var SessionInterface */
    private $session;

    /**
     * Generator constructor.
     *
     * @param FormFactoryInterface $formFactory
     * @param HostProviderManager  $hostProviderManager
     * @param Twig                 $twig
     * @param SessionInterface     $session
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        HostProviderManager $hostProviderManager,
        Twig $twig,
        SessionInterface $session
    ) {
        $this->formFactory = $formFactory;
        $this->hostProviderManager = $hostProviderManager;
        $this->session = $session;
        $this->twig = $twig;
    }

    /**
     * @param Request $request
     *
     * @throws \InvalidArgumentException
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     * @throws \Symfony\Component\Form\Exception\LogicException
     * @throws \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     * @throws \Symfony\Component\Serializer\Exception\UnexpectedValueException
     * @throws \Symfony\Component\Yaml\Exception\ParseException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     *
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        /** @var Params $params */
        $params = $this->session->get('app.legalNotice.params');

        if ($this->session->has('app.legalNotices')) {
            /** @var LegalNotices $legalNotices */
            $legalNotices = $this->session->get('app.legalNotices');
        } else {
            $legalNotices = new LegalNotices();
        }

        $form = $this->formFactory->create(
            LegalNoticeForm::class,
            $legalNotices,
            [
                'legalNotice_params'  => $params,
                'hostProviderManager' => $this->hostProviderManager,
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->session->set('app.legalNotices', $legalNotices);

            return new Response(
                $this->twig->render(
                    'App\LegalNotice\document.html.twig',
                    [
                        'legalNotices'      => $legalNotices,
                        'legalNoticeParams' => $params,
                    ]
                )
            );
        }

        return new Response(
            $this->twig->render(
                'App\LegalNotice\form.html.twig',
                [
                    'form'                  => $form->createView(),
                    'legalNoticeParameters' => $params,
                    'hostProviderData'      => $this->hostProviderManager->findAll(),
                ]
            )
        );
    }
}

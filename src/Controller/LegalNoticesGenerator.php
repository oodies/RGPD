<?php

/*
 * This file is part of RGPD project.
 *
 * (c) Sébastien CHOMY <sebastien.chomy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment as Twig;

/**
 * Class LegalNoticesGenerator.
 */
class LegalNoticesGenerator
{
    /** @var FormFactoryInterface */
    private $formFactoryInterface;

    /** @var Twig */
    private $twig;

    /**
     * LegalNoticesGenerator constructor.
     *
     * @param FormFactoryInterface $formFactoryInterface
     * @param Twig                 $twig
     */
    public function __construct(FormFactoryInterface $formFactoryInterface, Twig $twig)
    {
        $this->formFactoryInterface = $formFactoryInterface;
        $this->twig = $twig;
    }

    /**
     * @param Request $request
     *
     * @throws \InvalidArgumentException
     * @throws \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     *
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        $form = $this->formFactoryInterface->create('App\Form\LegalNoticesForm');
        $form->handleRequest($request);

        return new Response(
            $this->twig->render(
                'App/legalNoticeGenerator.html.twig',
                ['form' => $form->createView()]
            )
        );
    }
}

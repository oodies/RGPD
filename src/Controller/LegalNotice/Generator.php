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

    /** @var Twig */
    private $twig;

    /** @var SessionInterface */
    private $session;

    /**
     * Generator constructor.
     *
     * @param FormFactoryInterface $formFactory
     * @param Twig                 $twig
     * @param SessionInterface     $session
     */
    public function __construct(FormFactoryInterface $formFactory, Twig $twig, SessionInterface $session)
    {
        $this->formFactory = $formFactory;
        $this->session = $session;
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
        /** @var Params $params */
        $params = $this->session->get('app.legalNotice.params');
        $legalNotices = new LegalNotices();

        $form = $this->formFactory->create(
            LegalNoticeForm::class,
            $legalNotices,
            ['legalNotice_params' => $params]
        );
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            return new Response(
                $this->twig->render(
                    'App\LegalNotice\document.html.twig',
                    //$form->getData()

                    [
                        // STUB Fake
                        'domain'                     => 'oodigital.fr',
                        'individual_owner_firstname' => 'Sébastien',
                        'individual_owner_lastname'  => 'CHOMY',

                        'society_owner_name'  => 'OODIGITAL',
                        'society_entity_type' => 'SASU',

                        'owner_streetAddress'   => '2b rue de la Houille Blanche',
                        'owner_postalCode'      => '38190',
                        'owner_addressLocality' => 'Villard Bonnot',
                        'owner_addressCountry'  => 'France',
                        'owner_email'           => 'sebastien.chomy@gmail.com',
                        'owner_phone'           => '06 12 65 39 07',

                        'capital_amount' => '1000 €',
                        'duns_rcs'       => 'Grenoble 548 235 365',
                        'duns_rm'        => '548 454 454',
                        'vat_identifier' => 'FR 22 424 761 419',

                        'licensed_profession_title'    => 'Agent immobilier',
                        'licensed_profession_organism' => 'CCI de Grenoble',
                        'licensed_profession_ref'      => 'Loi X',
                        'licensed_profession_eu_state' => 'France',

                        'hosting_name'            => 'OVH',
                        'hosting_entity_type'     => 'SAS Société par action simplifié',
                        'hosting_streetAddress'   => '2 rue Kellermann',
                        'hosting_postalCode'      => '59100',
                        'hosting_addressLocality' => 'Roubaix',
                        'hosting_addressCountry'  => 'France',
                        'hosting_capital_amount'  => '10 069 020 €',
                        'hosting_duns_rcs'        => 'Grenoble 382 198 794',
                        'hosting_phone'           => '1007',
                        'hosting_email'           => 'support@ovh.com',
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
                ]
            )
        );
    }
}

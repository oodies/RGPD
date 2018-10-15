<?php

/*
 * This file is part of RGPD project.
 *
 * (c) Sébastien CHOMY <sebastien.chomy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Manager;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Yaml\Yaml;

/**
 * Class HostProviderManager.
 */
class HostProviderManager
{
    /** @var ParameterBagInterface */
    private $parameterBag;

    /**
     * HostProviderManager constructor.
     *
     * @param ParameterBagInterface $parameterBag
     */
    public function __construct(ParameterBagInterface $parameterBag)
    {
        $this->parameterBag = $parameterBag;
    }

    /**
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     * @throws \Symfony\Component\Yaml\Exception\ParseException
     *
     * @return array
     */
    public function getList(): array
    {
        $list = [];
        foreach ($this->loadData() as $identifier => $hostProvider) {
            $list[$identifier] = $hostProvider['name'];
        }

        return $list;
    }

    /**
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     * @throws \Symfony\Component\Serializer\Exception\UnexpectedValueException
     * @throws \Symfony\Component\Yaml\Exception\ParseException
     *
     * @return string
     */
    public function findAll(): string
    {
        $encoder = new JsonEncoder();

        return $encoder->encode($this->loadData(), 'json');
    }

    /**
     * @throws \Symfony\Component\DependencyInjection\Exception\ParameterNotFoundException
     * @throws \Symfony\Component\Yaml\Exception\ParseException
     *
     * @return array
     */
    protected function loadData(): array
    {
        $resource = Yaml::parseFile(
            $this->parameterBag->get('project_dir')
            .'/src/DataFixtures/hostProviderData.yml'
        );

        return $resource['hostProvider'];
    }
}

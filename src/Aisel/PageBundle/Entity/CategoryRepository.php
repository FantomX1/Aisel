<?php

/*
 * This file is part of the Aisel package.
 *
 * (c) Ivan Proskuryakov
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aisel\PageBundle\Entity;

use Aisel\CategoryBundle\Entity\AbstractCategoryRepository;

/**
 * CategoryRepository for Pages
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends AbstractCategoryRepository
{
    protected $categoryEntity = 'AiselPageBundle:Category';
}

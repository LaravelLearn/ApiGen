<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace ApiGen\Contracts\Parser\Reflection;

use ApiGen\Contracts\Parser\Reflection\Behavior\InClassInterface;
use ApiGen\Contracts\Parser\Reflection\Behavior\InNamespaceInterface;
use ApiGen\Contracts\Parser\Reflection\Behavior\LinedInterface;


interface ConstantReflectionInterface extends ElementReflectionInterface, InNamespaceInterface, InClassInterface,
	LinedInterface
{

	/**
	 * @return string
	 */
	function getTypeHint();


	/**
	 * @return mixed
	 */
	function getValue();


	/**
	 * @return string
	 */
	function getValueDefinition();

}

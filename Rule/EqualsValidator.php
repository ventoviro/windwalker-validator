<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2008 - 2014 Asikart.com. All rights reserved.
 * @license    GNU General Public License version 2 or later;
 */

namespace Windwalker\Validator\Rule;

use Windwalker\Validator\AbstractValidator;

/**
 * The EqualsValidator class.
 * 
 * @since  {DEPLOY_VERSION}
 */
class EqualsValidator extends AbstractValidator
{
	/**
	 * Property data.
	 *
	 * @var  mixed
	 */
	protected $compare = '';

	/**
	 * Property strict.
	 *
	 * @var  boolean
	 */
	protected $strict = false;

	/**
	 * Class init.
	 *
	 * @param mixed $compare
	 * @param bool  $strict
	 */
	public function __construct($compare, $strict = false)
	{
		$this->compare = $compare;
		$this->strict = $strict;
	}

	/**
	 * Test this value.
	 *
	 * @param mixed $value
	 *
	 * @return  boolean
	 */
	protected function test($value)
	{
		if ($this->strict)
		{
			return ($this->compare === $value);
		}
		else
		{
			return ($this->compare == $value);
		}
	}
}

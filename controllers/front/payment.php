<?php
/**
 * NOTICE OF LICENSE
 *
 *  @author    Kjeld Borch Egevang
 *  @copyright 2015 Quickpay
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *
 *  $Date: 2015/08/16 15:11:48 $
 *  E-mail: helpdesk@quickpay.net
 */

/**
 * @since 1.5.0
 */
class QuickPayPaymentModuleFrontController extends ModuleFrontController
{
	public function postProcess()
	{
		$quickpay = new Quickpay();
		$quickpay->payment();
	}
}

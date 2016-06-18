<?php
namespace Kaankilic\FpdfInvoice\Facades;
use Illuminate\Support\Facades\Facade;
 
class PortableInvoice extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'PortableInvoice'; }
 
}
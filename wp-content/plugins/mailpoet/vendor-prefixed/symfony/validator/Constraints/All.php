<?php
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;
if (!defined('ABSPATH')) exit;
class All extends Composite
{
 public $constraints = [];
 public function getDefaultOption()
 {
 return 'constraints';
 }
 public function getRequiredOptions()
 {
 return ['constraints'];
 }
 protected function getCompositeOption()
 {
 return 'constraints';
 }
}

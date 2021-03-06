<?php
namespace MailPoetVendor\Twig\TokenParser;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Parser;
abstract class AbstractTokenParser implements TokenParserInterface
{
 protected $parser;
 public function setParser(Parser $parser)
 {
 $this->parser = $parser;
 }
}
\class_alias('MailPoetVendor\\Twig\\TokenParser\\AbstractTokenParser', 'MailPoetVendor\\Twig_TokenParser');

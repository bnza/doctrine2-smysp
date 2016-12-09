<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PBald\SMySp\DBAL\Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use GeoPHP\GeoPhp;

/**
 * Description of AbstractGeometryType
 *
 * @author Pietro Baldassarri <pietro.baldassarri@gmail.com>
 */
abstract class AbstractGeometryType extends Type {

    public function canRequireSQLConversion() {
        return true;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform) {
        return $value->asText();
    }

    public function convertToDatabaseValueSQL($sqlExpr, AbstractPlatform $platform) {
        return sprintf('GeomFromText(%s)', $sqlExpr);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform) {
        return GeoPhp::load($value, 'wkb');
    }

    public function convertToPHPValueSQL($sqlExpr, $platform) {
        return sprintf('AsBinary(%s)', $sqlExpr);
    }

    public function getName() {
        return strtolower(substr(get_called_class(), strrpos(get_called_class(), "\\") + 1, -4));
    }

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform) {
        return strtoupper(substr(get_called_class(), strrpos(get_called_class(), "\\") + 1, -4));
    }

}

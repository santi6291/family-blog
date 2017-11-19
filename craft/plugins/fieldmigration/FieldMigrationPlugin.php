<?php
namespace Craft;

class FieldMigrationPlugin extends BasePlugin {
    
    /**
     * @return string
     */
    public function getName() {
         return Craft::t('Field Migration');
    }
    
    /**
     * @return string
     */
    public function getDescription() {
        return Craft::t('Craft Field Customizations');
    }
    
    /**
     * @return string
     */
    public function getVersion() {
        return '1.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion() {
        return '1.0';
    }

    /**
     * @return string
     */
    public function getDeveloper() {
        return 'Santiago J Sosa';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl() {
        return 'https://santiagojsosa.com';
    }
}

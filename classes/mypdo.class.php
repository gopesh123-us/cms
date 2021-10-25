<?php
class MyPDO extends PDO {

    public function __construct($file = 'settings/my_settings.ini') {
        if (!$settings = parse_ini_file($file, true)) {
            throw new exception('unable to open ' . $file . '.');
        }
        $dsn = $settings['local-database']['driver'] .
            ':host=' . $settings['local-database']['host'] .
            ((!empty($settings['local-database']['port'])) ? (';port=' . $settings['local-database']['port']) : '') .
            ';dbname=' . $settings['local-database']['schema'];
        parent::__construct($dsn, $settings['local-database']['username'], $settings['local-database']['password']);
    }
}

<?php
class MyPDO extends PDO {

    public function __construct($file = 'settings/my_settings.ini') {
        if (!$settings = parse_ini_file($file, true)) {
            throw new exception('unable to open ' . $file . '.');
        }
        $dsn = $settings['database']['driver'] .
            ':host=' . $settings['database']['host'] .
            ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
            ';dbname=' . $settings['database']['schema'];
        parent::__construct($dsn, $settings['database']['username'], $settings['database']['password']);
    }
}

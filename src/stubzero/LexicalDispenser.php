<?php

namespace stubzero;

/**
 * Class LexicalDispenser
 *
 * @package stubzero
 * @author robotomize@gmail.com
 */
class LexicalDispenser
{
    const FAKER_NUMBER = 'randomNumber';

    const FAKER_DIGIT = 'randomDigit';

    const FAKER_FLOAT = 'randomFloat';

    const FAKER_WORD = 'word';

    const FAKER_SENTENCE = 'sentence';

    const FAKER_TEXT = 'text';

    const FAKER_NAME = 'name';

    const FAKER_FIRST_NAME = 'firstName';

    const FAKER_LAST_NAME = 'lastName';

    const FAKER_CITY = 'city';

    const FAKER_STREET = 'streetAddress';

    const FAKER_POST = 'postcode';

    const FAKER_COUNTRY = 'country';

    const FAKER_ADDRESS = 'address';

    const FAKER_PHONE = 'phoneNumber';

    const FAKE_COMPANY = 'company';

    const FAKER_DATE_TIME = 'dateTime';

    const FAKER_YEAR = 'year';

    const FAKER_MONTH = 'month';

    const FAKER_EMAIL = 'email';

    const FAKER_PASSWORD = 'password';

    const FAKER_USERNAME = 'userName';

    const FAKER_USER_AGENT = 'userAgent';

    const FAKER_CREDIT_CARD = 'creditCardNumber';

    const FAKER_COLOR = 'colorName';

    const FAKER_FILE_EXTENSION = 'fileExtension';

    const FAKER_MIME = 'mimeType';

    const FAKER_FILE = 'file';

    const FAKER_PATH = 'file';

    const FAKER_IMAGE = 'image';

    const FAKER_UUID = 'uuid';

    const FAKER_BOOLEAN = 'boolean';

    const FAKER_COUNTRY_CODE = 'countryCode';

    public static $fakerDispenserMap = [
        'integer' => self::FAKER_NUMBER,
        'int'       => self::FAKER_NUMBER,
        'number' => self::FAKER_NUMBER,
        'bool'  => self::FAKER_BOOLEAN,
        'boolean' => self::FAKER_BOOLEAN,
        'phone'     => self::FAKER_PHONE,
        'tel'       => self::FAKER_PHONE,
        'telphone'  => self::FAKER_PHONE,
        'sms'       => self::FAKER_PHONE,
        'verify_code' => self::FAKER_PHONE,
        'address'      => self::FAKER_ADDRESS,
        'email'         => self::FAKER_EMAIL,
        'mail'          => self::FAKER_EMAIL,
        'name'          => self::FAKER_NAME,
        'firstName'     => self::FAKER_FIRST_NAME,
        'string'        => self::FAKER_WORD,
        'array'         => [],
        'city'          => self::FAKER_CITY,
        'year'          => self::FAKER_YEAR,
        'path'          => self::FAKER_PATH,
        'password'      => self::FAKER_PASSWORD,
        'username'      => self::FAKER_USERNAME,
        'text'          => self::FAKER_TEXT

    ];
}
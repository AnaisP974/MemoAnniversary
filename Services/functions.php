<?php

/**
 * Delete the "." or " " if $number contains any
 *
 * @param string $phone
 * @return string
 */
function claenPhone($phone): string
{
    $phone = trim($phone);
    // Supprimer les "." et les espaces " " du numéro
    $cleanedNumber = str_replace(['.', ' '], '', $phone);
    return $cleanedNumber;
}

/**
 * Return true if contain number only
 *
 * @param int $number
 * @return boolean
 */
function isPhoneNumuber($number): bool 
{
    // Vérifier si la chaîne nettoyée ne contient que des chiffres
    return ctype_digit($number);
}

/**
 * Return true if the length of a string ($string) is between a minimum length ($min) and a maximum length ($max).
 *
 * @param int $min
 * @param int $max
 * @param string $string
 * @return boolean
 */
function minMaxLength($min, $max, $string): bool
{
    $length = strlen($string);  
    return $min < $length && $length < $max;  
}

/**
 * Return true if the date is valid
 *
 * @param [type] $date
 * @param string $format
 * @return boolean
 */
function validateDate($date, $format = 'Y-m-d'): bool
{
    $d = DateTime::createFromFormat($format, $date);

    // Vérifie si la date est valide, correspond au format, est inférieure ou égale à aujourd'hui,
    // et est supérieure au 1er janvier 1900
    $today = new DateTime(); // Date du jour
    $minDate = new DateTime('1900-01-01'); // 1er janvier 1900

    return $d && $d->format($format) === $date && $d <= $today && $d > $minDate;
}

/**
 * Find the country name by its calling code.
 *
 * @param string $code The calling code to search for.
 * @param array $country_codes The array containing calling codes and country names.
 * @return string|null The country name if found, null otherwise.
 */
function findCountryByCode($code, $country_codes)
{
    // Vérifie si le code existe dans le tableau
    if (array_key_exists($code, $country_codes)) {
        return $country_codes[$code]; // Retourne le nom du pays correspondant
    }
    return null; // Retourne null si le code n'est pas trouvé
}

/**
 * Return true if is a valid email
 *
 * @param string $email
 * @return boolean
 */
function isValidEmail($email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
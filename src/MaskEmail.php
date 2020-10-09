<?php

namespace Technovus\MaskEmail;

class MaskEmail
{
    public function hide($email, $hideUsername = true, $hideDomain = true, $mask = '*', $maxLengthUsername = 2, $maxLengthDomain = 2, $repeater = 3): string
    {
        [$username, $domain] = explode('@', $email);

        $partialUsername = $hideUsername ? $this->setMask($username, $mask, $maxLengthUsername, $repeater) : $username;
        $partialDomain = $hideDomain ? $this->setMask($domain, $mask, $maxLengthDomain, $repeater) : $domain;

        return $partialUsername . '@' . $partialDomain;
    }

    private function setMask($text, $mask, $maxLength, $repeater): string
    {
        $masked = substr($text, 0, $maxLength);
        $masked .= str_repeat($mask, $repeater);

        return $masked;
    }
}

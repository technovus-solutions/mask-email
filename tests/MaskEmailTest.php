<?php

namespace Technovus\MaskEmail\Tests;

use PHPUnit\Framework\TestCase;
use Technovus\MaskEmail\MaskEmail;

class MaskEmailTest extends TestCase
{
    public function testDefaultMask()
    {
        $email = new MaskEmail;
        self::assertSame($email->hide('someone@gmail.com'), 'so***@gm***');
    }

    public function testOnlyUsernameMask()
    {
        $email = new MaskEmail;
        self::assertSame($email->hide('someone@gmail.com', true, false), 'so***@gmail.com');
    }

    public function testOnlyDomainMask()
    {
        $email = new MaskEmail;
        self::assertSame($email->hide('someone@gmail.com', false, true), 'someone@gm***');
    }

    public function testChangeMaskCharacter()
    {
        $email = new MaskEmail;
        self::assertSame($email->hide('someone@gmail.com', true, true, '?'), 'so???@gm???');
    }

    public function testMinLengthMaskRepeater()
    {
        $email = new MaskEmail;
        self::assertSame($email->hide('someone@gmail.com', true, true, '*', 4, 6, 5), 'some*****@gmail.*****');
    }
}

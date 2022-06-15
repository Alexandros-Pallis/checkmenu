<?php
namespace App\Libraries;

use CodeIgniter\Test\CIUnitTestCase;

class SlugConverterTest extends CIUnitTestCase
{
    public function testConvertSlug(): void
    {
        // given that we have a slug that contains greek characters
        $slug = 'καφετέρια';
        // when we call convert slug method
        $slugConverter = new SlugConverter;
        // then we convert to greeklish
        $this->assertEquals('kafeteria', $slugConverter->convertSlug($slug));
    }
}

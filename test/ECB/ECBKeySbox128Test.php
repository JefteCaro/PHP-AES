<?php

# CAVS 11.1
# Config info for aes_values
# AESVS KeySbox test data for ECB
# State : Encrypt and Decrypt
# Key Length : 128
# Generated on Fri Apr 22 15:11:26 2011

namespace AES\Test;

use AES\Mode\ECB;
use AES\Key;

class ECBKeySbox128 extends \PHPUnit_Framework_TestCase
{
    function caseProvider()
    {
        return [
            ['10a58869d74be5a374cf867cfb473859', '00000000000000000000000000000000', '6d251e6944b051e04eaa6fb4dbf78465'],
            ['caea65cdbb75e9169ecd22ebe6e54675', '00000000000000000000000000000000', '6e29201190152df4ee058139def610bb'],
            ['a2e2fa9baf7d20822ca9f0542f764a41', '00000000000000000000000000000000', 'c3b44b95d9d2f25670eee9a0de099fa3'],
            ['b6364ac4e1de1e285eaf144a2415f7a0', '00000000000000000000000000000000', '5d9b05578fc944b3cf1ccf0e746cd581'],
            ['64cf9c7abc50b888af65f49d521944b2', '00000000000000000000000000000000', 'f7efc89d5dba578104016ce5ad659c05'],
            ['47d6742eefcc0465dc96355e851b64d9', '00000000000000000000000000000000', '0306194f666d183624aa230a8b264ae7'],
            ['3eb39790678c56bee34bbcdeccf6cdb5', '00000000000000000000000000000000', '858075d536d79ccee571f7d7204b1f67'],
            ['64110a924f0743d500ccadae72c13427', '00000000000000000000000000000000', '35870c6a57e9e92314bcb8087cde72ce'],
            ['18d8126516f8a12ab1a36d9f04d68e51', '00000000000000000000000000000000', '6c68e9be5ec41e22c825b7c7affb4363'],
            ['f530357968578480b398a3c251cd1093', '00000000000000000000000000000000', 'f5df39990fc688f1b07224cc03e86cea'],
            ['da84367f325d42d601b4326964802e8e', '00000000000000000000000000000000', 'bba071bcb470f8f6586e5d3add18bc66'],
            ['e37b1c6aa2846f6fdb413f238b089f23', '00000000000000000000000000000000', '43c9f7e62f5d288bb27aa40ef8fe1ea8'],
            ['6c002b682483e0cabcc731c253be5674', '00000000000000000000000000000000', '3580d19cff44f1014a7c966a69059de5'],
            ['143ae8ed6555aba96110ab58893a8ae1', '00000000000000000000000000000000', '806da864dd29d48deafbe764f8202aef'],
            ['b69418a85332240dc82492353956ae0c', '00000000000000000000000000000000', 'a303d940ded8f0baff6f75414cac5243'],
            ['71b5c08a1993e1362e4d0ce9b22b78d5', '00000000000000000000000000000000', 'c2dabd117f8a3ecabfbb11d12194d9d0'],
            ['e234cdca2606b81f29408d5f6da21206', '00000000000000000000000000000000', 'fff60a4740086b3b9c56195b98d91a7b'],
            ['13237c49074a3da078dc1d828bb78c6f', '00000000000000000000000000000000', '8146a08e2357f0caa30ca8c94d1a0544'],
            ['3071a2a48fe6cbd04f1a129098e308f8', '00000000000000000000000000000000', '4b98e06d356deb07ebb824e5713f7be3'],
            ['90f42ec0f68385f2ffc5dfc03a654dce', '00000000000000000000000000000000', '7a20a53d460fc9ce0423a7a0764c6cf2'],
            ['febd9a24d8b65c1c787d50a4ed3619a9', '00000000000000000000000000000000', 'f4a70d8af877f9b02b4c40df57d45b17']
        ];
    }

    /**
     * @dataProvider caseProvider
     */
    function testEncrypt($key, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ecb = new ECB;
        $result = $ecb->encrypt($key, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider caseProvider
     */
    function testDecrypt($key, $plaintext, $ciphertext)
    {
        $key = new Key(hex2bin($key));
        $ecb = new ECB;
        $result = $ecb->decrypt($key, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}

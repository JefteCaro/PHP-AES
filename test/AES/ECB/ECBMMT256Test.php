<?php

# CAVS 11.1
# Config info for aes_values
# AESVS MMT test data for ECB
# State : Encrypt and Decrypt
# Key Length : 256
# Generated on Fri Apr 22 15:11:30 2011

namespace AES\Test;

use AES\Mode\ECB;
use AES\Context\ECB as Context;

class ECBMMT256 extends \PHPUnit_Framework_TestCase
{
    function encryptProvider()
    {
        return [
            ['cc22da787f375711c76302bef0979d8eddf842829c2b99ef3dd04e23e54cc24b', 'ccc62c6b0a09a671d64456818db29a4d', 'df8634ca02b13a125b786e1dce90658b'],
            ['7a52e4d342aa07255a7e7c34266cf7302abe2d4dd7ec4468a46187ee61825ffa', '7e771c6ee4b26db89050e982ba7e9803c8da34606434dd85d2910e538076d001', 'a91d8b2ddf37520bc469470ad0dd6394923143ce55386beb1f9c4bd51584658e'],
            ['605c4139c961b496ca5148f1bdb1bb1901f2101943a0ec10fcdc403d3b0c285a', '68c9885ba2be03181f65f1e04e83d6ba6880467550bcf099be26dc9d9c0af15ab02abac07c116ac862a41da90cfa604f', 'a7603d29bbba4c77208bf2f3df9f5ec85204adce012299f2cce7b326ce78f5cf8040343dd291e8cf9f3645726368dc20'],
            ['f984b0f534fc0ae2c0a8593e16ab8365f25fcc9c5947f9a2db45b588160d35c3', '351fee099122e371c4830f409c6c4411186d22176f7138b054f16b3c79679c2f520685651ba8e4b61c08dccb2c31982f743631a97524d2ca4d351ac23546c178', '8b9c9e692c16e7059818e285e85d8fa5433dee2aff9fec61d6a0a781e24b24f64902fbd18cef7461ad7760cfb2442fb74ffd9be108a386545f2a216430ef16fb'],
            ['ba42b760bb5a5de21acb9aba214c9783cd71ea841ada018580abc4e1be3b76dd', '4b4b12d6ee6fc0bf987eaafe2634aad464781ff4c83d3f8a61a6af7c0a6d51f0e3855d0e02feb307652a6f562bfebe4604baf1b4e7cdd01603f231bcf7a0c95645a141b704008cd8d62979201a4c84e2', 'fa18d25e37ea0ce94f0949efc0edecc6a40fada8f007fd8e760afed0a83ebb350c82b03baaa6ee19f791bb9bd1b44d27a76fc6eb0e1c0017d68776ed69a541851a732e46ef328def064baf6a0a755588'],
            ['1d29079cc34ab5a3bc713f416a129f9d26ada15fca458cc2731404ea857d2f79', 'b36809198132518d815aa37f32f40dd7a952ec8bd63355700837b450b396b33c72125e23482a84a42b916021c3de78156f85c6a78906167feb64afd8b1d935d641c8ce1a89f3849588eeeb9910d40336ca385fc37a5e87bb84ab9ccbb05b3a28', '7ae803b14914d156439f580c02c592bf9a41b7b80c20168129a33fae2290403f01a6fabe4fea7ac770ffbc6c421f8e013b9e831674ef17eb27d446dded3baf50686b809c18b6bbd588cd3c7423b64987e9164b7e1e66987dc9319790ae27b3e8'],
            ['2e39c585ce4900d323ce29713bebe73a1be08a0cb22e9f1310fcc14ad4b9b23e', 'e199899e1e12cffcb28909aec51b36c2f96fab49ef32b9650cc38aa37d2f4c8b785f9176c590f6a07e04037e13f7535290d5f5fc23aa1113d9dacf34a812749ab27ecfefc83dd3622d1285fa9d5c192a8e4857a5b6454473cdb8ff4594f1e906165e08b22effae6b491a55ca6d30ce73', '2c4998428e72f6d96e982a316f73bf2a7da81730909b65403489ab92ada6de11882d08742f90f0f109d3420b00b8abe6873f4fdd1474923da2c5bdea2e4523ffca2132015ecf7c9cac9de2f956b112c4ba8e4c8e4b354a3df6e4652d6a77ae982a24d15cff71b979538d49994fd38761'],
            ['85405c4f0ebbe8f29228f02f1ff184e2f5e7857e8933c2a1d08f61ecb9b68111', '0f5321db6fd9d816d88e28183a739d90974e76095caa9f12f11fe49c8fd35fa3524132118f397cdf6728857d9c9a3c74a4fde44afca80aa5bf1cbab47789f2cb3394574dda5727cfbea96f7a74a07eb1e45599f49ce7f0056ac3d14929221c70dbd3f759f83ac22f06994ed96a8e49917eddfdd2e3703b78199c91234ca6c3dc', '2ac6de212da0434bea9cdd7332637307131d31e8c4b0c1fd02298e249bfa9f64f34aae45faadf79d971ae82b033d903f6b18adec171ec83ccd147b44d05dec5cedb574534e8901385534c3f1dae4aebee0eb2164975e8b4e85a7b5a766ffd8247885c2b6429eb659b92c8d953af92b54517933566654d804665112bec17ff3a4'],
            ['f157285db00e64c2791668a54493966e3039a19426605056b95b7eac5106667d', '3637f71f60a430322980349ad414fcfdc14f87e9915d210e8b7be5aa3e09814468e0399d17e72fe40ee1e1296a89f31486e12fd71bc7ca61acc9e8d4213a633ab285c87406c2a3729c87fdaa6b0122c2c543a89081ddac4559b15fe59102c2fbdacead8a755e16469b1b90041da31270481cfafe0bc951235cda51c4d78924efa862efc9ace20fc7d344a321c9984a84', 'ca0a683e759c1312928fe01198f625bba044bb9003e82b9279b6812feefe54e30ccc0ca51fb858eba9ed4667e85c146a424071e7bf603f1f538ead57a3e29c583549c08e279bb078cc51e42eeb3d2443da965192cd0478e8d7ea1343cf90196f520933e3aab6db2dcd9a76534e05483eea2d373deae95d6213b91db2b96aa6adce727cdf7e43bd01978d07e0241cf1c1'],
            ['44a2b5a7453e49f38261904f21ac797641d1bcd8ddedd293f319449fe63b2948', 'c91b8a7b9c511784b6a37f73b290516bb9ef1e8df68d89bf49169eac4039650c4307b6260e9c4e93650223440252f5c7d31c26c56209cbd095bf035b9705880a1628832daf9da587a6e77353dbbce189f963235df160c008a753e8ccea1e0732aa469a97659c42e6e31c16a723153e39958abe5b8ad88ff2e89af40622ca0b0d6729a26c1ae04d3b8367b548c4a6335f0e5a9ec914bb6113c05cd0112552bc21', '05d51af0e2b61e2c06cb1e843fee3172825e63b5d1ce8183b7e1db6268db5aa726521f46e948028aa443af9ebd8b7c6baf958067ab0d4a8ac530ecbb68cdfc3eb93034a428eb7e8f6a3813cea6189068dfecfa268b7ecd5987f8cb2732c6882bbec8f716bac254d72269230aec5dc7f5a6b866fd305242552d400f5b0404f19cbfe7291fab690ecfe6018c4309fc639d1b65fcb65e643edb0ad1f09cfe9cee4a']
        ];
    }

    function decryptProvider()
    {
        return [
            ['a81fd6ca56683d0f5445659dde4d995dc65f4bce208963053e28d7f2df517ce4', '4154c0be71072945d8156f5f046d198d', '8b2b1b22f733ac09d1196d6be6a87a72'],
            ['bc1415aa119c29a9a27c0ea9d19ed50ace86c488b8e39d6a056424fb23cddb3e', '0a5f3278d7d96632e0508391e813f06b35d8d754ddf5867240d3168dd69f4a66', 'a8fab53790af3519cf21978e3cf03ba8e52b902be23311bf17f1ad2c5ff37c16'],
            ['0d0ec1b61ebc5177c4513ef1d7d5bb97d06abaa2d33710a8eda6d3709acf0705', 'c1c83fa3cd3d52524876e715bc28efe7c7c4256a139e9d2c874ea029bf56b792ba0606cdd39ddbbdf3b1874304d16d05', 'f17733de8f763110ef4b305594936ca2bb75119ad65261be32ba919a2c3ef8b8f1c42f62b8474362e53ee7cc6c82a647'],
            ['ae67999eb240a9e5b6e3f0bd6b504530000be51343b8bc3b0ae8e0eed1335f98', '254c015626baa3ed2d7f05f5d0a98c8cc2f29dd7a4410ea41d74db4e2c5d1be1bd0a327f7b4a4703e66cf9e3a54a4d5b1d87ebc842148b52adf9aacdf05281e1', '959b7d696e2267f3d465f6f77ff2453296cfa54843363981484853e67cc21d340b803d6d653213d1037b81d849c5acc361771a5a072c9c29d6bc5096c38c9c86'],
            ['dde079371133ebd68df061b56f0efd3a14c137ced35a30e0eb68422cb924dc3d', 'ea1fd2f064548906ad10ce1240758868ed9fb32921dabe18681232a8308b955ad0d28e45c9f34af64bec1d7bfb626dbbf393cc090a8c64f8569b9870f008e801f7001578d8d286b0cc5eebaba2c920e1', '5889ad2c09a6307611e6115a78c13566de05b5892f7850fb917f83898e07486cc9ce746e891db102a0f570d7ad3c2804f40cdfe23bcc8b2c8a3bfba48632892d3df3bb7bbd1029b915cab2faf281c4e6'],
            ['d68a345159178b9bd2e3bd7a13c9512ee9b397944eff81a8df28b44890a2df3b', '59722586a56ed6c8207d6a0a9f7278588f5203782fb64e6ffd71f1486d732d10e1ed7d25d6b66db15beeaf71c8e16cbbac2dd8bf0728090dba7c09573b142a788d3c99b670033644d5e4a30b94a69bab618186bcfd824a59a93163dfe07036f2', 'a56e000be19eced20479cbe8964fdb366c437ca3b5fd9d04c339c1a51bdb0aad46df1b78ef05b02e492464136155d76dd32c3b4aa4198c3926cb75d2578434ab4fff0894508b6f60ff39686a0fd151d1bffba7a786b1bc02acd2d23b56e45749'],
            ['5a20ff7da47c7e853becca0ca5f32bc80e17de973337146f7e1f3c93725a850d', 'bed9f2db31ebbfac57f3745e0dacf71087cb35c94326b9ba3b1b7dc35f30003942f798e714350a52d0425842b6b3da7dfc3790d6c1bfb76642e29a1a507fab6e02a4d277a7ae0527feb219cdaa1cd8dbe09653ec632c7a05b2ade91b7f5405d664a74895d2a0d9b24a0b6007cf2f18b1', '34467d07c2e49c44e9003da836786169e7c0fb54f1e2f178387c2f759d50809ce84d6705fe6350907d5e945e262af378753163f5569be9c09c874d254dde2545898d4cbd2eaa1ade9c8a02f8d76d418565d02075e082999bbf6f2ba985f65f17c73cc0cc29ac04824db98b3cc2b77126'],
            ['082d33edd0a1ad3de596762d711bae6f3188a12c7b6ced987fc7e8c9cd7a3cc9', '496553f24d47264ef74a584b893ccd4ea1cfc0b1044aac15997e6dfab9fca28da68557c058c2e1a0803508e4c7706cc1568521069cbd9d644b8dd40da4c5a182f50b68a56088fa16dde1b8bc8269fca20395b40575b050ab57cfdf76d208743840dfcfc9ec0139571835b0fe458f4498aee6c1d716898e91c32ed55acb2be458', '51c527c0985369234a599f476731e8b51ac7a44bfbe37ec71a641ad71ad464f9e45467d82a0d101f67043b87e2da34de183459295000cea9e0f0ccdd82270fc70b880fa80104e0b78b7a5b1620dee83da84702223b277a0966b10ddf44ef06b98e48788092c763895d95f13fd389fff5706e70876d5af8c197cdebb38a4d2ba6'],
            ['3e1934554952b87a07d6371721f4d78a0e9adadc42be7347a2fcd8f53c81990b', '2b3c036be68fba7a625dc72a0e68b6677326f8751714e0e1a14df2b73d5b5df5424dc640130947d643e4b8c4fc702d59a195bfdab2e49077f027097ec23d66cfd82575900e589a21935c17524a968ad47060b7ee805b8871530652ee8c905a2633eb98c2a022bb459bec6d3ec181d7c22aac68194822d2b81212566f62fd42e49cc8b8409110b028a3bd40ef29da1c0a', '5f967e10da68887567b514293149697212888efc9fd90604459f8a9c4fa1f4117f0214fa675b680571bd980cf941bfccd4826e1fe1420a0ba59554341b507e760d2d85c7219b3f5e261eef2d201bc134d2ec32d8b97157e3de91f1c312b26ff193e637bf78012850f23d0536715e51a68be730c55375774642345e0daaa4c40185985cab38df09dac9a688e6b597d327'],
            ['c4a71e055a7254dda360693fe1be49f10faa6731c36dbaa6590b05974e185c5b', '2c487fa96f4090c56aa1b5be81918a934c9492878fb0cd686dcf8d17d86485454c51237bbd09205dcef1552f430dd098b9d827a694730c133a0222c77f540f9d5fc2d36af359583c9e3b49df884228a64de79b67f66207c8281360b99b214042ce61367ff97960e944453cd63679bb44708897d29bc5e70f9fc8f1f715143fbb00f7f5c1b7b161ec26d8d41d36fab0fa8a85c3ee6ce4d37007eb7a89d6753590', '31fd5a307e279b2f34581e2c432379df8eccbaf79532938916711cd377540b9045373e47f2214b8f876040af733f6c9d8f03a7c58f8714d2fbb4c14af59c75b483adc718946ee907a18286cc4efd206789064b6f1b195f0d0d234468e4f00e6f1cad5cd3b9c0a643b3c0dd09280ff2e2a5929183409384dd72dc94e39687ea2b623d5d776700bd8b36e6130ffde966f134c4b1f35f29c5cc4a03297e1ccc9539']
        ];
    }

    /**
     * @dataProvider encryptProvider
     */
    function testEncrypt($key, $plaintext, $ciphertext)
    {
        $ctx = new Context(hex2bin($key));
        $ecb = new ECB();
        $result = $ecb->encrypt($ctx, hex2bin($plaintext));
        $this->assertSame(hex2bin($ciphertext), $result);
    }

    /**
     * @dataProvider decryptProvider
     */
    function testDecrypt($key, $ciphertext, $plaintext)
    {
        $ctx = new Context(hex2bin($key));
        $ecb = new ECB();
        $result = $ecb->decrypt($ctx, hex2bin($ciphertext));
        $this->assertSame(hex2bin($plaintext), $result);
    }
}

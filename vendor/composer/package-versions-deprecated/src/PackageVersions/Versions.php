<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => '1.3.0@b9c31def6a83f84b4d4a40d35996d375755f0e08',
  'biscolab/laravel-recaptcha' => '5.2.0@30175f16f77d5439d0e058e4dd3b2071dfe4c269',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'composer/ca-bundle' => '1.3.3@30897edbfb15e784fe55587b4f73ceefd3c4d98c',
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.2@9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
  'dragonmantank/cron-expression' => 'v3.3.1@be85b3f05b46c39bbc0d95f6c071ddff669510fa',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'ezyang/htmlpurifier' => 'v4.14.0@12ab42bd6e742c70c0a52f7b82477fcd44e64b75',
  'fideloper/proxy' => '4.4.1@c073b2bd04d1c90e04dc1b787662b558dd65ade0',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'fruitcake/laravel-cors' => 'v1.0.6@1d127dbec313e2e227d65e0c483765d8d7559bf6',
  'graham-campbell/result-type' => 'v1.0.4@0690bde05318336c7221785f2a932467f98b64ca',
  'guzzlehttp/guzzle' => '7.4.1@ee0a041b1760e6a53d2a39c8c34115adc2af2c79',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.1.0@089edd38f5b8abba6cb01567c2a8aaa47cec4c72',
  'intervention/image' => '2.7.1@744ebba495319501b873a4e48787759c72e3fb8c',
  'josiasmontag/laravel-recaptchav3' => '1.0.0@a18b78e3921ea8c265a136bb0823a08e601bef0b',
  'laminas/laminas-diactoros' => '2.8.0@0c26ef1d95b6d7e6e3943a243ba3dc0797227199',
  'laravel/framework' => 'v8.81.0@9cc0efd724ce67a190b1695ba31a27bbb1ae9177',
  'laravel/legacy-factories' => 'v1.3.0@5edc7e7eb76e7b4b29221f32139bcbf806c8870f',
  'laravel/sanctum' => 'v2.14.0@0647a87140c7522e75826cffcadb3ad6e01f71e9',
  'laravel/serializable-closure' => 'v1.0.5@25de3be1bca1b17d52ff0dc02b646c667ac7266c',
  'laravel/socialite' => 'v5.4.0@4b1999232a572dfe61f42c7295490d1372dad097',
  'laravel/tinker' => 'v2.7.0@5f2f9815b7631b9f586a3de7933c25f9327d4073',
  'laravel/ui' => 'v3.4.2@e01198123f7f4369d13c1f83a897c3f5e97fc9f4',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'lcobucci/clock' => '2.0.0@353d83fe2e6ae95745b16b3d911813df6a05bfb3',
  'lcobucci/jwt' => '4.1.5@fe2d89f2eaa7087af4aa166c6f480ef04e000582',
  'league/commonmark' => '2.2.1@f8afb78f087777b040e0ab8a6b6ca93f6fc3f18a',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '1.1.9@094defdb4a7001845300334e7c1ee2335925ef99',
  'league/fractal' => '0.19.2@06dc15f6ba38f2dde2f919d3095d13b571190a7c',
  'league/mime-type-detection' => '1.9.0@aa70e813a6ad3d1558fc927863d47309b4c23e69',
  'league/oauth1-client' => 'v1.10.0@88dd16b0cff68eb9167bfc849707d2c40ad91ddc',
  'maatwebsite/excel' => '3.1.35@6f171c8b79e1c0fb254f3ec40f7a11ac79289eaa',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '3.0.1@ab8bc271e404909db09ff2d5ffa1e538085c0f22',
  'markbaker/matrix' => '3.0.0@c66aefcafb4f6c269510e9ac46b82619a904c576',
  'messagebird/php-rest-api' => 'v2.1.0@3d22eb0b0572fb7e95e09469da1e287c974b2b12',
  'mollie/mollie-api-php' => 'v2.45.0@43ae5471967a47b34752b6b3a229038a05034527',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'myclabs/php-enum' => '1.8.3@b942d263c641ddb5190929ff840c68f78713e937',
  'nesbot/carbon' => '2.56.0@626ec8cbb724cd3c3400c3ed8f730545b744e3f4',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.7@0af4e3de4df9f1543534beab255ccf459e7a2c99',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'paypal/paypal-checkout-sdk' => '1.0.1@ed6a55075448308b87a8b59dcb7fedf04a048cb1',
  'paypal/paypalhttp' => '1.0.0@1ad9b846a046f09d6135cbf2cbaa7701bbc630a3',
  'phpoffice/phpspreadsheet' => '1.21.0@1a359d2ccbb89c05f5dffb32711a95f4afc67964',
  'phpoption/phpoption' => '1.8.1@eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.11.1@570292577277f06f590635381a7f761a6cf4f026',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'razorpay/razorpay' => '2.8.1@4ad7b6a5bd9896305858ec0a861f66020e39f628',
  'rmccue/requests' => 'v1.8.0@afbe4790e4def03581c4a0963a1e8aa01f6030f1',
  'stripe/stripe-php' => 'v7.112.0@f5213ccb88795663f73841bc65f467a0e1e61180',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/console' => 'v5.4.2@a2c6b7ced2eb7799a35375fb9022519282b5405e',
  'symfony/css-selector' => 'v5.4.2@cfcbee910e159df402603502fe387e8b677c22fd',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/error-handler' => 'v5.4.2@e0c0dd0f9d4120a20158fc9aec2367d07d38bc56',
  'symfony/event-dispatcher' => 'v5.4.0@27d39ae126352b9fa3be5e196ccf4617897be3eb',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/finder' => 'v5.4.2@e77046c252be48c48a40816187ed527703c8f76c',
  'symfony/http-foundation' => 'v5.4.2@ce952af52877eaf3eab5d0c08cc0ea865ed37313',
  'symfony/http-kernel' => 'v5.4.2@35b7e9868953e0d1df84320bb063543369e43ef5',
  'symfony/mime' => 'v5.4.2@1bfd938cf9562822c05c4d00e8f92134d3c8e42d',
  'symfony/polyfill-ctype' => 'v1.24.0@30885182c981ab175d4d034db0f6f469898070ab',
  'symfony/polyfill-iconv' => 'v1.24.0@f1aed619e28cb077fc83fac8c4c0383578356e40',
  'symfony/polyfill-intl-grapheme' => 'v1.24.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php72' => 'v1.24.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.24.0@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v5.4.2@2b3ba8722c4aaf3e88011be5e7f48710088fb5e4',
  'symfony/routing' => 'v5.4.0@9eeae93c32ca86746e5d38f3679e9569981038b1',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/string' => 'v5.4.2@e6a5d5ecf6589c5247d18e0e74e30b11dfd51a3d',
  'symfony/translation' => 'v5.4.2@ff8bb2107b6a549dc3c5dd9c498dcc82c9c098ca',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/var-dumper' => 'v5.4.2@1b56c32c3679002b3a42384a580e16e2600f41c1',
  'textmagic/sdk' => 'dev-master@b81cd04df7ab6fd21f0ddd75bf987cf3f65fe9c6',
  'tijsverkoyen/css-to-inline-styles' => '2.2.4@da444caae6aca7a19c0c140f68c6182e337d5b1c',
  'twilio/sdk' => '6.33.1@569441b5e63e41d8fea3907298718eb569c980b0',
  'vlucas/phpdotenv' => 'v5.4.1@264dce589e7ce37a7ba99cb901eed8249fbec92f',
  'voku/portable-ascii' => '1.6.1@87337c91b9dfacee02452244ee14ab3c43bc485a',
  'vonage/client' => '2.4.0@29f23e317d658ec1c3e55cf778992353492741d7',
  'vonage/client-core' => '2.10.0@abd4047c0944416d497884f4c3c8db7a52876198',
  'vonage/nexmo-bridge' => '0.1.1@36490dcc5915f12abeaa233c6098e0dce14bbb0a',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'yajra/laravel-datatables' => 'v1.5.0@50de5e20ef01da1a353e0a81c0ad5f9da6a985ec',
  'yajra/laravel-datatables-buttons' => 'v4.13.3@5c8fb97c26c14408c8933f68d86c6e4823d05740',
  'yajra/laravel-datatables-editor' => 'v1.25.0@096282402265a7a3aad06ce88df33d13968a3a5f',
  'yajra/laravel-datatables-fractal' => 'v1.6.0@0aa387a9b3738248fa61110f0378904ef42b4a73',
  'yajra/laravel-datatables-html' => 'v4.41.0@9e5d9edf397a7311751d09377a93b47aafe7e77b',
  'yajra/laravel-datatables-oracle' => 'v9.19.0@553482df5f68969928acc0ee1a3af032cdaaf824',
  'barryvdh/laravel-debugbar' => 'v3.6.5@ccf109f8755dcc7e58779d1aeb1051b04e0b4bef',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.17.4@95c80bd35ee6858e9e1439b2f6a698295eeb2070',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'filp/whoops' => '2.14.5@a63e5e8f26ebbebf8ed3c5c691637325512eb0dc',
  'fzaninotto/faker' => 'v1.9.2@848d8125239d7dbf8ab25cb7f054f1a630e68c2e',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'maximebf/debugbar' => 'v1.17.3@e8ac3499af0ea5b440908e06cc0abe5898008b3c',
  'mockery/mockery' => '1.5.0@c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.11.0@8b610eef8582ccdc05d8f2ab23305e2d37049461',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.13@597cb647654ede35e43b137926dfdfef0fb11743',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/debug' => 'v4.4.36@346e1507eeb3f566dcc7a116fefaa407ee84691b',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'dev-main@37325cacdb70500ca944b0ec69be714f7b900741',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}

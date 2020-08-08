<?php

namespace FabioChiquezi\PetitionData\Tests\Integrations\Infra\InformationGeneralSite;

use Exception;
use FabioChiquezi\PetitionData\Infra\Doctrine\EntityManagerFactory;
use FabioChiquezi\PetitionData\Domain\InformationGeneralSite\InformationGeneralSite;
use FabioChiquezi\PetitionData\Infra\InformationGeneralSite\Repository;
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../../../env.php';

class RepositoryTest extends TestCase{
    private static $repository;
    private $con;

    public static function setUpBeforeClass(): void
    {
        $entityManagerFactory = new EntityManagerFactory();
        self::$repository = new Repository(
            $entityManagerFactory->getEntityManager()
        );
    }

    protected function setUp(): void
    {
        $connectionParams = array(
            'user'     =>  getenv('ABAIXO_ASSINADO_DB_USER'),
            'password' =>  getenv('ABAIXO_ASSINADO_DB_PASSWORD'),
            'dbname'   =>  getenv('ABAIXO_ASSINADO_DB_NAME'),
            'host'     =>  getenv('ABAIXO_ASSINADO_DB_HOST') . ':' . getenv('ABAIXO_ASSINADO_DB_PORT'),
            'driver'   =>  getenv('ABAIXO_ASSINADO_DB_DRIVER')
        );
        
        $this->conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams); 
        $this->conn->beginTransaction();       
    }


    public function testGetAll(){
        $item = self::$repository->getAll();

        self::assertContainsOnlyInstancesOf(InformationGeneralSite::class, $item);
        
        if(count($item)){
            self::assertObjectHasAttribute('titleSeo', $item[0]);
            self::assertObjectHasAttribute('descriptionSeo', $item[0]);
            self::assertObjectHasAttribute('imageSeo', $item[0]);
            self::assertObjectHasAttribute('whatsapp', $item[0]);
            self::assertObjectHasAttribute('facebook', $item[0]);
            self::assertObjectHasAttribute('twitter', $item[0]);
            self::assertObjectHasAttribute('mobileBanner', $item[0]);
            self::assertObjectHasAttribute('tabletBanner', $item[0]);
            self::assertObjectHasAttribute('desktopBanner', $item[0]);
            self::assertObjectHasAttribute('titleSite', $item[0]);
            self::assertObjectHasAttribute('subtitleSite', $item[0]);
            self::assertObjectHasAttribute('contentSite', $item[0]);
            self::assertObjectHasAttribute('videoSite', $item[0]);
        }
    }

    /**
    * @dataProvider dataInformationGeneralSite
    */
    public function testAddData($data){
        $allItens = self::$repository->getAll();
        self::$repository->deleteAll($allItens);

        self::$repository->addData($data);
        $item = self::$repository->getAll()[0];
        
        
        self::assertCount(1, $allItens);
        self::assertContainsOnlyInstancesOf(InformationGeneralSite::class, self::$repository->getAll());
        
        self::assertEquals('aaa', $item->getTitleSeo());
        self::assertEquals('bbb', $item->getDescriptionSeo());
        self::assertEquals('ccc', $item->getImageSeo());
        self::assertEquals('5519983127035', $item->getWhatsapp());
        self::assertEquals('ddd', $item->getFacebook());
        self::assertEquals('eee', $item->getTwitter());
        self::assertEquals('fff', $item->getMobileBanner());
        self::assertEquals('ggg', $item->getTabletBanner());
        self::assertEquals('hhh', $item->getDesktopBanner());
        self::assertEquals('iii', $item->getTitleSite());
        self::assertEquals('jjj', $item->getSubtitleSite());
        self::assertEquals('kkk', $item->getContentSite());
        self::assertEquals('lll', $item->getVideoSite());
    }


    /**
    * @dataProvider dataInformationGeneralSite
    */
    public function testAddDataExceptionWhatsApp($data){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Número do WhatsApp inválido, deve conter entre 13 e 14 caracteres');
        
        $data['whatsapp'] = '55199831';
        self::$repository->addData($data);
    }

    /**
    * @dataProvider dataInformationGeneralSite
    */
    public function testAddDataExceptionWhatsApp2($data){
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Por favor envie somente números para o campo do WhatsApp');
        
        $data['whatsapp'] = '5519983127035a';
        self::$repository->addData($data);
    }

    /**
    * @dataProvider dataInformationGeneralSite
    */
    public function testDeleteData($data){
        $itens = self::$repository->getAll();
        self::$repository->deleteAll($itens);

        self::assertCount(0, self::$repository->getAll());
        self::$repository->addData($data);
    }

    public function dataInformationGeneralSite(){
        $data = [
            'titleSeo' => 'aaa',
            'descriptionSeo' => 'bbb',
            'imageSeo' => 'ccc',
            'whatsapp' => '5519983127035',
            'facebook' => 'ddd',
            'twitter' => 'eee',
            'mobileBanner' => 'fff',
            'tabletBanner' => 'ggg',
            'desktopBanner' => 'hhh',
            'titleSite' => 'iii',
            'subtitleSite' => 'jjj',
            'contentSite' => 'kkk',
            'videoSite' => 'lll'
        ];

        return [
            [$data]
        ];
    }

    protected function tearDown(): void
    {
        $this->conn->rollback();
    }
}
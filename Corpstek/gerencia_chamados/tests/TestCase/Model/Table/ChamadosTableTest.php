<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChamadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChamadosTable Test Case
 */
class ChamadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChamadosTable
     */
    protected $Chamados;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Chamados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Chamados') ? [] : ['className' => ChamadosTable::class];
        $this->Chamados = TableRegistry::getTableLocator()->get('Chamados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Chamados);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DepartamentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DepartamentoTable Test Case
 */
class DepartamentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DepartamentoTable
     */
    protected $Departamento;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Departamento',
        'app.Empleados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Departamento') ? [] : ['className' => DepartamentoTable::class];
        $this->Departamento = $this->getTableLocator()->get('Departamento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Departamento);

        parent::tearDown();
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

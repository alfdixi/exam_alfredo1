<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadosTable Test Case
 */
class EmpleadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadosTable
     */
    protected $Empleados;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Empleados',
        'app.Departamento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empleados') ? [] : ['className' => EmpleadosTable::class];
        $this->Empleados = $this->getTableLocator()->get('Empleados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Empleados);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

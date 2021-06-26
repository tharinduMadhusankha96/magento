<?php

namespace Inchoo\Helloworld\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $tableName = $setup->getTable('neosolax_test');
        //Check for the existence of the table
        if ($setup->getConnection()->isTableExists($tableName) == true) {
            $data = [
                [
                    'first_name' => 'kamal',
                    'last_name' => 'perera',
                    'contact_number' => 0713605265,
                    'email' => 'kamal.perera@gmail.com',
                    'current_gpa' => 2.78,
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                ],
                [
                    'first_name' => 'nimal',
                    'last_name' => 'perera',
                    'contact_number' => 0713605265,
                    'email' => 'nimal.perera@gmail.com',
                    'current_gpa' => 1.5,
                    'status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                ]
            ];
            foreach ($data as $item) {
                //Insert data
                $setup->getConnection()->insert($tableName, $item);
            }
        }
        $setup->endSetup();
    }
}


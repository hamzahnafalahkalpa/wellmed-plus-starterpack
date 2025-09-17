<?php

namespace Hanafalah\KlinikStarterpack\Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Hanafalah\ModuleEmployee\Seeders\EmployeeTypeSeeder;
use Hanafalah\ModuleExamination\Seeders\{
    ExaminationStuffSeeder,
    MasterVaccineSeeder,
    FormSeeder
};
use Hanafalah\ModulePayment\Database\Seeders\DatabaseSeeder as ModulePaymentSeeder;
use Hanafalah\ModulePeople\Database\Seeders\DatabaseSeeder as PeopleCollectionSeeder;
use Hanafalah\ModuleAnatomy\Database\Seeders\DatabaseSeeder as AnatomyCollectionSeeder;
use Hanafalah\ModuleItem\Database\Seeders\DatabaseSeeder as ItemCollectionSeeder;
use Hanafalah\ModuleInformedConsent\Seeders\MasterInformedConsentSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        try {
            \Illuminate\Support\Facades\Artisan::call('telescope:pause');
            
            $this->call([
                WorkspaceSeeder::class,
                ApiAccessSeeder::class,
                PermissionSeeder::class,
                RoleSeeder::class,
                PeopleCollectionSeeder::class,
                ItemStuffSeeder::class,
                PatientTypeSeeder::class,
                PatientTypeServiceSeeder::class,
                MedicServiceSeeder::class,
                ServiceClusterSeeder::class,
                PaymentMethodSeeder::class,
                ProfessionSeeder::class,
                OccupationSeeder::class,
                FormSeeder::class,
                ExaminationStuffSeeder::class,
                MasterVaccineSeeder::class,
                AnatomyCollectionSeeder::class,
                RegionalSeeder::class,
                EncodingSeeder::class,
                EmployeeTypeSeeder::class,
                EmployeeSeeder::class,
                PatientOccupationSeeder::class,
                FundingSeeder::class,
                ModulePaymentSeeder::class,
                DosageFormSeeder::class,
                FreqUnitSeeder::class,
                MedicalCompositionUnitSeeder::class,
                CompositionUnitSeeder::class,
                MedicalNetUnitSeeder::class,
                MixUnitSeeder::class,
                TherapeuticClassSeeder::class,
                PackageFormSeeder::class,
                TrademarkSeeder::class,
                UsageLocationSeeder::class,
                UsageRouteSeeder::class,
                RoomItemCategorySeeder::class,
                ItemCollectionSeeder::class,
                ClassRoomSeeder::class,
                BrandSeeder::class,
                InfrastructureSeeder::class,
                PurchaseLabelSeeder::class,
                SampleSeeder::class,
                ClinicalPathologySeeder::class,
                RadiologySeeder::class,
                ProgramCategorySeeder::class,
                ProgramOccupationSeeder::class,
                MasterInformedConsentSeeder::class,
                ScreeningSeeder::class
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

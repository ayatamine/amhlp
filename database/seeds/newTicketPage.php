<?php

use Illuminate\Database\Seeder;

class newTicketPage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\newTicketPage::create([
           'id'=>'1',
            'title'=>'Submit a Ticket',
            'Category_label'=>'Select the item you need help with',
            'Sub_Category_label'=>'Select the sub categoy you need help with',
            'Subject_Label'=>'In a few words, tell us what your enquiry is about',
            'Description_Label'=>'Tell us more...Please be as detailed as possible.',
            'Sidebar_Title'=>'Before you submit:',
            'Submit_button'=>'Submit',
            'Sidebar_Tips1'=>'Tell us!',
            'Sidebar_Tips1_details'=>'Add as much detail as possible, including site and page name.',
            'Sidebar_Tips2'=>'Show us!',
            'Sidebar_Tips2_details'=>'Add a screenshot or a link to a video.',
        ]);
    }
}

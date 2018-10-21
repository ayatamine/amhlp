<?php

use Illuminate\Database\Seeder;

class allPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\allPermissions::create([
            'id'=>'1',
          'parent_id'=>'0',
          'permission_name'=>'SuperAdmin'
        ]);
        \App\allPermissions::create([
            'id'=>'2',
          'parent_id'=>'0',
          'permission_name'=>'admin'
        ]);
        \App\allPermissions::create([
            'id'=>'3',
          'parent_id'=>'0',
          'permission_name'=>'actions'
        ]);
        \App\allPermissions::create([
            'id'=>'4',
          'parent_id'=>'0',
          'permission_name'=>'analytics'
        ]);
        //5
        \App\allPermissions::create([
            'id'=>'5',
          'parent_id'=>'0',
          'permission_name'=>'articles'
        ]);
        // 6
         \App\allPermissions::create([
            'id'=>'6',
          'parent_id'=>'0',
          'permission_name'=>'billing plans'
        ]);
        // 7
            \App\allPermissions::create([
                'id'=>'7',
            'parent_id'=>'0',
            'permission_name'=>'canned replies'
            ]);
            // 8
            \App\allPermissions::create([
                'id'=>'8',
            'parent_id'=>'0',
            'permission_name'=>'categories'
            ]);

            // 9
            \App\allPermissions::create([
                'id'=>'9',
            'parent_id'=>'0',
            'permission_name'=>'conditions'
            ]);

             // 10
            \App\allPermissions::create([
                'id'=>'10',
            'parent_id'=>'0',
            'permission_name'=>'files'
            ]);
           // 11
            \App\allPermissions::create([
                'id'=>'11',
            'parent_id'=>'0',
            'permission_name'=>'localizations'
            ]);
            // 12
            \App\allPermissions::create([
                'id'=>'12',
            'parent_id'=>'0',
            'permission_name'=>'mail templates'
            ]);
            // 13
            \App\allPermissions::create([
                'id'=>'13',
            'parent_id'=>'0',
            'permission_name'=>'pages'
            ]);
            // 14
            \App\allPermissions::create([
                'id'=>'14',
            'parent_id'=>'0',
            'permission_name'=>'replies'
            ]);

             // 15
            \App\allPermissions::create([
                'id'=>'15',
            'parent_id'=>'0',
            'permission_name'=>'roles'
            ]);
            // 16
            \App\allPermissions::create([
                'id'=>'16',
            'parent_id'=>'0',
            'permission_name'=>'settings'
            ]);
            // 17
            \App\allPermissions::create([
                'id'=>'17',
            'parent_id'=>'0',
            'permission_name'=>'tags'
            ]);
             // 18
            \App\allPermissions::create([
                'id'=>'18',
            'parent_id'=>'0',
            'permission_name'=>'tickets'
            ]);
            //19
            \App\allPermissions::create([
                'id'=>'19',
            'parent_id'=>'0',
            'permission_name'=>'triggers'
            ]);
            //20
            \App\allPermissions::create([
                'id'=>'20',
            'parent_id'=>'0',
            'permission_name'=>'users'
            ]);
        //admin
        \App\allPermissions::create([
          'parent_id'=>'2',
          'permission_name'=>'admin.access',
          'permission_description'=>'Required in order to access any admin area page.'
        ]);
        \App\allPermissions::create([
        
          'parent_id'=>'2',
          'permission_name'=>'permissions.view',
          'permission_description'=>'Allows viewing of permissions list.'
        ]);
        \App\allPermissions::create([
        
          'parent_id'=>'2',
          'permission_name'=>'appearance.update',
          'permission_description'=>'Allows access to appearance editor.'
        ]);
        /// actions 
        \App\allPermissions::create([
         
          'parent_id'=>'3',
          'permission_name'=>'actions.view',
        ]);
        /// analytique
        \App\allPermissions::create([
        
          'parent_id'=>'4',
          'permission_name'=>'reports.view'
        ]);
        /// articles

        \App\allPermissions::create([
     
          'parent_id'=>'5',
          'permission_name'=>'articles.view'
        ]);
        \App\allPermissions::create([
          'parent_id'=>'5',
          'permission_name'=>'articles.create'
        ]);
        \App\allPermissions::create([
          'parent_id'=>'5',
          'permission_name'=>'articles.update'
        ]);
        \App\allPermissions::create([
          'parent_id'=>'5',
          'permission_name'=>'articles.delete'
        ]);
        //billing plan
        \App\allPermissions::create([
          'parent_id'=>'6',
          'permission_name'=>'plans.view'
        ]);
        \App\allPermissions::create([
            'parent_id'=>'6',
            'permission_name'=>'plans.create'
          ]);
          \App\allPermissions::create([
          'parent_id'=>'6',
          'permission_name'=>'plans.update'
        ]);
        \App\allPermissions::create([
          'parent_id'=>'6',
          'permission_name'=>'plans.delete'
        ]);

         // canned replies
        \App\allPermissions::create([
          'parent_id'=>'7',
          'permission_name'=>'canned_replies.view'
        ]);
        \App\allPermissions::create([
            'parent_id'=>'7',
            'permission_name'=>'canned_replies.create'
          ]);
          \App\allPermissions::create([
          'parent_id'=>'7',
          'permission_name'=>'canned_replies.update'
        ]);
        \App\allPermissions::create([
          'parent_id'=>'7',
          'permission_name'=>'canned_replies.delete'
        ]);
        // categories
        \App\allPermissions::create([
          'parent_id'=>'8',
          'permission_name'=>'categories.view'
        ]);
        \App\allPermissions::create([
            'parent_id'=>'8',
            'permission_name'=>'categories.create'
          ]);
          \App\allPermissions::create([
          'parent_id'=>'8',
          'permission_name'=>'categories.update'
        ]);
        \App\allPermissions::create([
          'parent_id'=>'8',
          'permission_name'=>'categories.delete'
        ]);
        //condition
        \App\allPermissions::create([
                'parent_id'=>'9',
                'permission_name'=>'conditions.view'
        ]);
        //files
        \App\allPermissions::create([
                'parent_id'=>'10',
                'permission_name'=>'files.view'
        ]);
     
        \App\allPermissions::create([
                'parent_id'=>'10',
                'permission_name'=>'files.create'
        ]);

        \App\allPermissions::create([
                'parent_id'=>'10',
                'permission_name'=>'files.delete'
        ]);
         /// localization
        \App\allPermissions::create([
                'parent_id'=>'11',
                'permission_name'=>'localizations.view'
        ]);
        \App\allPermissions::create([
            'parent_id'=>'11',
            'permission_name'=>'localizations.create'
        ]);
        \App\allPermissions::create([
            'parent_id'=>'11',
            'permission_name'=>'localizations.update'
       ]);
        \App\allPermissions::create([
        'parent_id'=>'11',
        'permission_name'=>'localizations.delete'
        ]);
        // mail template
        
        \App\allPermissions::create([
                'parent_id'=>'12',
                'permission_name'=>'mail_templates.view'
        ]);
        \App\allPermissions::create([
            'parent_id'=>'12',
            'permission_name'=>'mail_templates.update'
        ]);
         // pages
        
        \App\allPermissions::create([
            'parent_id'=>'13',
            'permission_name'=>'pages.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'13',
          'permission_name'=>'pages.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'13',
            'permission_name'=>'pages.update'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'13',
          'permission_name'=>'pages.delete'
        ]);
       // replies
        
        \App\allPermissions::create([
            'parent_id'=>'14',
            'permission_name'=>'replies.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'14',
          'permission_name'=>'replies.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'14',
            'permission_name'=>'replies.update'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'14',
          'permission_name'=>'replies.delete'
        ]);
            // roles
        
        \App\allPermissions::create([
            'parent_id'=>'15',
            'permission_name'=>'roles.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'15',
          'permission_name'=>'roles.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'15',
            'permission_name'=>'roles.update'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'15',
          'permission_name'=>'roles.delete'
        ]);
        //settings
        \App\allPermissions::create([
            'parent_id'=>'16',
            'permission_name'=>'settings.vie'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'16',
          'permission_name'=>'settings.update'
        ]);
                 // tags
        
        \App\allPermissions::create([
            'parent_id'=>'17',
            'permission_name'=>'tags.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'17',
          'permission_name'=>'tags.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'17',
            'permission_name'=>'tags.update'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'17',
          'permission_name'=>'tags.delete'
        ]);
          // tickets
        
          \App\allPermissions::create([
            'parent_id'=>'18',
            'permission_name'=>'tickets.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'18',
          'permission_name'=>'tickets.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'18',
            'permission_name'=>'tickets.update'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'18',
          'permission_name'=>'tickets.delete'
        ]);
         // triggers
        
        \App\allPermissions::create([
            'parent_id'=>'19',
            'permission_name'=>'triggers.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'19',
          'permission_name'=>'triggers.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'19',
            'permission_name'=>'triggers.update'
        ]);
    
        // users
        
        \App\allPermissions::create([
            'parent_id'=>'20',
            'permission_name'=>'users.view'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'20',
          'permission_name'=>'users.create'
        ]);
       \App\allPermissions::create([
            'parent_id'=>'20',
            'permission_name'=>'users.update'
        ]);
        \App\allPermissions::create([
        'parent_id'=>'20',
          'permission_name'=>'users.delete'
        ]);
    }
}

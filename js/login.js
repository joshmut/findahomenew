/*
    Document   : login.js
    Created on : Jan 13, 2013, 12:54:09 AM
    Author     : chegzcol
    Description:
        Purpose of the stylesheet follows.
*/

login();

function gam_login(user, password){
    
}
function pull_back(){
    $('#pop-black').fadeTo('slow', 0.5);
    
}
function login(){
    $('#list-hd a').live('click', function(){
        pull_back();
        $('#login-x').fadeIn('slow');
        $('#login-x').html('<div id = "loading">loading...</div>').load('index.php/login/log_me/', function(){
            $('#login-x a').button();
          
       });
        
    })
}
$('#login-x a').live('click', function(){
    $('#pop-black').fadeOut('slow');
    $('#login-x').fadeOut('slow');
})

function main_application(){ //load main application functions
    $('input[name=search-box]').live('focus', function(){
        $(this).val('')
    })

    $('#touch-1').button();
    $('#touch-2').button();
    $('#touch-3').button();
    $('#touch-4').button();
    $('#touch-5').button();
    $('#touch-6').button();

    function pointer(left_1,top_1){
        var left_x    = left_1;
        var top_y     = top_1;

        $('#pointer').animate({left: left_x}, 100).animate({top: top_y}, 100);
    }

    $('#close a').button();

    $("#tabs").tabs();
    $('#tabs input[type=submit]').button();    
    $('.datepicker').datepicker();
    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});

    $('#home-pg').live('hover', function(){
        $('#pointer').fadeTo('slow', 0.6);
    })

    $('#touch-1').live('hover', function(){
        var left_1  = '5.5%';
        var top_1   = '9%';
        pointer(left_1,top_1);
    })

    $('#touch-2').live('hover', function(){
        var left_1  = '37%';
        var top_1   = '9%';
        pointer(left_1,top_1);
    })

    $('#touch-3').live('hover', function(){
        var left_1  = '68%';
        var top_1   = '9%';
        pointer(left_1,top_1);
    })

    $('#touch-4').live('hover', function(){
        var left_1  = '5.5%';
        var top_1   = '49%';
        pointer(left_1,top_1);
    })

    $('#touch-5').live('hover', function(){
        var left_1  = '37%';
        var top_1   = '49%';
        pointer(left_1,top_1);
    })

    $('#touch-6').live('hover', function(){
        var left_1  = '68%';
        var top_1   = '49%';
        pointer(left_1,top_1);
    })


    /*
     *load additional functions with this to the main application script
     **/

    renew_licence();
    issue_license();
    revoke_license();
    add_county();
	view_profile();
    inspection_report();
    addMinutes();
    menuShotrcut();

    listItems();

    //retrieve_list();

    updated_list();

    advanced_list();

    ajax_unrenewed_list();

    ajax_revoked_list();

    reports();

    setting();

    edit_practitioner();
}

/*
 *
 *function for renewing licence
 *
 **/

function renew_licence()
{
    $('#touch-2').live('click', function(){
        
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Renew License');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/licence_type');
        

        return false;
    })

    $('#close a').live('click', function(){
        $('#app-sup').slideUp('slow');
        $('#pop-black').fadeOut('slow');

        return false;
    })

    $('select[name=licence_tp]').live('change', function(){

        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')

        switch($(this).val())

        {
            case 'Pharmacist':
                $('#app-sup-cnt').load('index.php/five_tabbed_menu/pharmacist_page', function(){
                    $('input[type=submit]').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });
                break;

            case 'Pharmrep':
                $('#app-sup-cnt').load('index.php/five_tabbed_menu/pharmrep_page', function(){
                    
                    $('input[type=submit]').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });
                break;

            case 'Pharmtec':
                $('#app-sup-cnt').load('index.php/five_tabbed_menu/pharmtec_page', function(){
                    
                    $('input[type=submit]').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });
                break;
                
            case 'Premises':
                $('#app-sup-cnt').load('index.php/five_tabbed_menu/premises_page', function(){
                    
                    $('input[type=submit]').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });
                break;
        }

        /*
         *event for renew manufacturer license
         **/
        $('input[name=manufac_pdf]').live('click', function(){
            
            $('#app-sup-cnt').load('index.php/five_tabbed_menu/renew_manufacturer_page', function(){
                    
                    $('input[type=submit]').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });

            return false;
        })
    })
}

function issue_license()

{
    $('#touch-3').live('click', function(){

        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Issue License');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/issue_license', function(){
            $('#is-ls').button();
        });

        return false;
        
    })

    $('#is-ls').live('click', function(){
        var type    = $('select[name=issue_lc]').val();
        var id      = $('input[name=reg_no]').val();

        if(id == '')
            {
                alert('Registration Number Field is empty!')
            }
            else
                {
                  switch(type)
                  {
                      case 'Pharmacist':
                          $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                          .load('index.php/five_tabbed_menu/issue_pharmacist',
                            {
                                id : id

                            }, function(){

                            $('input[name=pdf]').button();
                            });
                          break;
                          
                      case 'Pharmrep':
                          $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                          .load('index.php/five_tabbed_menu/issue_pharmrep',
                          {
                                id : id

                            }, function(){
                            $('input[name=pdf]').button();
                            });
                          break;
                          
                      case 'Pharmtec':
                          $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                          .load('index.php/five_tabbed_menu/issue_pharmtec',
                          {
                                id : id

                            },function(){
                            $('input[name=pdf]').button();
                            });
                          break;
                          
                      case 'Premises':
                          $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                          .load('index.php/five_tabbed_menu/issue_premises',
                          {
                                id : id

                            },function(){
                            $('input[name=pdf]').button();
                            });
                          break;

                     default:
                           alert('Select license');
                  }
                }

        return false;
    })
}

function revoke_license(){
    $('#touch-6').live('click', function(){
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Revoke LIcense');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/revoke_license_page', function(){
            $('input[type=submit]').button();
            $('.datepicker').datepicker();
            $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
        });

        return false;
    })
    
}
/*
 *function to add a new county into the system
 *
 **/

function add_county()

{
    $('#app_county').live('click', function(){

        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Add A New County');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/add_county', function(){
            $('input[name=pdf]').button();
        });

        return false;
    })
}


/*
 *function to view profile.
  *
**/
function view_profile()

{
    $('#app_profile').live('click', function(){

        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('View profile');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/view_profile', function(){
            $('input[name=pdf]').button();
        });

        return false;
    })
}


/*
 *inspection report
 **/

function inspection_report()

{
    $('#touch-4').live('click', function(){

        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Add Inspection Report');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/inspection_report', function(){
            $('input[name=pdf]').button();
            $('#manu').button();
            $('#prem').button();
            $('.datepicker').datepicker();
            $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
        });

        return false;
    })

    /*
     *load pre-registratio masnufacturer form
     **/
    $('#manu').live('click', function(){

        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/manufacturer_inspectionPR', function(){
            $('input[name=pdf]').button();
            $('#manu').button();
            $('#prem').button();
            $('.datepicker').datepicker();
            $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
        });
        return false;
    });

    /*
     *load the preregistration premisese inspection report from
     **/
    $('#prem').live('click', function(){

        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/premises_inspectionPR', function(){
            $('input[name=pdf]').button();
            $('#manu').button();
            $('#prem').button();
            $('.datepicker').datepicker();
            $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
        });
        
        return false;
        
    });

}

function addMinutes()
{
    $('#touch-5').live('click', function(){
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Add Minutes');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/add_minutes_page', function(){
           $('input[name=pdf]').button();
           $('.datepicker').datepicker();
           $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
        });
        return false;
    })
}

/*
 *make the menu shortcuts to function
 **/

function menuShotrcut()
{
    $('#short-c li').live('click', function(){
        switch($(this).html())
        {
            case 'Renew License':
                pull_back();

                $('#app-sup').slideDown('slow');
                $('#close h1').html('Renew License');
                $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/licence_type');
                $('select[name=licence_tp]').live('change', function(){

                        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')

                        switch($(this).val())

                        {
                            case 'Pharmacist':
                                $('#app-sup-cnt').load('index.php/five_tabbed_menu/pharmacist_page', function(){
                                    $('input[type=submit]').button();
                                    $('.datepicker').datepicker();
                                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                                });
                                break;

                            case 'Pharmrep':
                                $('#app-sup-cnt').load('index.php/five_tabbed_menu/pharmrep_page', function(){

                                    $('input[type=submit]').button();
                                    $('.datepicker').datepicker();
                                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                                });
                                break;

                            case 'Pharmtec':
                                $('#app-sup-cnt').load('index.php/five_tabbed_menu/pharmtec_page', function(){

                                    $('input[type=submit]').button();
                                    $('.datepicker').datepicker();
                                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                                });
                                break;

                            case 'Premises':
                                $('#app-sup-cnt').load('index.php/five_tabbed_menu/premises_page', function(){

                                    $('input[type=submit]').button();
                                    $('.datepicker').datepicker();
                                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                                });
                                break;
                        }

                    })
                break;
           case 'Issue License':
                    pull_back();

                    $('#app-sup').slideDown('slow');
                    $('#close h1').html('Issue License');
                    $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/issue_license', function(){
                        $('#is-ls').button();
                    });
                    $('#is-ls').live('click', function(){
                    var type    = $('select[name=issue_lc]').val();
                    var id      = $('input[name=reg_no]').val();

                    if(id == '')
                        {
                            alert('Registration Number Field is empty!')
                        }
                        else
                            {
                              switch(type)
                              {
                                  case 'Pharmacist':
                                      $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                                      .load('index.php/five_tabbed_menu/issue_pharmacist',
                                        {
                                            id : id
                                        }
                                        , function(){

                                        $('input[name=pdf]').button();
                                        });
                                      break;

                                  case 'Pharmrep':
                                      $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                                      .load('index.php/five_tabbed_menu/issue_pharmrep',
                                        {
                                            id  : id
                                        }
                                        , function(){

                                        $('input[name=pdf]').button();
                                        });
                                      break;

                                  case 'Pharmtec':
                                      $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                                      .load('index.php/five_tabbed_menu/issue_pharmtec', 
                                        {
                                            id  : id
                                        }
                                        ,function(){

                                        $('input[name=pdf]').button();
                                        });
                                      break;

                                  case 'Premises':
                                      $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
                                      .load('index.php/five_tabbed_menu/issue_premises',
                                        {
                                            id : id
                                        }
                                        , function(){

                                        $('input[name=pdf]').button();
                                        });
                                      break;

                                 default:
                                       alert('Select license');
                              }
                            }

                    return false;
                })
                break;
           case 'Inspection Report':
                pull_back();

                $('#app-sup').slideDown('slow');
                $('#close h1').html('Add Inspection Report');
                $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/inspection_report', function(){
                    $('input[name=pdf]').button();
                    $('#manu').button();
                    $('#prem').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });
                 /*
                     *load pre-registratio masnufacturer form
                     **/
                    $('#manu').live('click', function(){

                        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/manufacturer_inspectionPR', function(){
                            $('input[name=pdf]').button();
                            $('#manu').button();
                            $('#prem').button();
                            $('.datepicker').datepicker();
                            $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                        });
                        return false;
                    });

                    /*
                     *load the preregistration premisese inspection report from
                     **/
                    $('#prem').live('click', function(){

                        $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/premises_inspectionPR', function(){
                            $('input[name=pdf]').button();
                            $('#manu').button();
                            $('#prem').button();
                            $('.datepicker').datepicker();
                            $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                        });

                        return false;

                    });
                break;
           case 'Add Minutes':
                    pull_back();

                    $('#app-sup').slideDown('slow');
                    $('#close h1').html('Add Minutes');
                    $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/add_minutes_page', function(){
                       $('input[name=pdf]').button();
                       $('.datepicker').datepicker();
                       $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                    });
                break;
           case 'Revoke License':
                pull_back();

                $('#app-sup').slideDown('slow');
                $('#close h1').html('Revoke LIcense');
                $('#app-sup-cnt').html('<div id = "loading">loading...</div>').load('index.php/five_tabbed_menu/revoke_license_page', function(){
                    $('input[type=submit]').button();
                    $('.datepicker').datepicker();
                    $('.datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
                });
                break;
        }
    })
}

/*
 *create the interractive ajax search of the application
 **/
$('#search-box').live('keyup', function(){
    var id = $(this).val();
    search(id);
})
function search(id)
{
    $('#search-box3').slideDown('slow');
    $('#search-box3').html('<div id = "loading">loading...</div>')
    .load('index.php/search/index/'+id+''); //

    $('#search-box3 tr').live('click', function(){
        var category = $(this).attr('class');
        var id = $(this).attr('id');

        $('#application-cnt').load('index.php/search/search_result/'+category+'/'+id+'');

        $('#search-box3').slideUp('slow');
    });
}

/*
 *auto load the list items using ajax
 **/

function listItems()

{
    $('.file').live('hover', function(){
        $('.file').css('color', '#000')
        $(this).css('cursor', 'pointer');
        $(this).css('color', ' blueviolet');
    })

    $('.file').live('click', function(){
        var id      = $(this).attr('id');   //county
        var type    = $(this).html();       //category of the practitioners

        //fetch list from the server
        $('#list-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/public_list/index',
                {
                    id      : id,
                    type    : type
                },
            function(){
                $('#myTable').paginateTable({rowsPerPage: 20});
                $('.prevPage').button();
                $('.nextPage').button();
            }); //
    })

}

/*
 *retrieve the list items from the server
 **/

function retrieve_list()

{
    $('#list-hlder .file').live('click', function(){
        var id = $(this).attr('id');
        var type = $(this).html();
        
        $('.display_list').html('<div id = "loading">loading...</div>')
        .load('index.php/list_all/renewed',
                {
                    id      : id,
                    type    : type
                },
            function(){               
                
            }); //
        
    })
    $('#list-hlder1 .file').live('click', function(){
        var id = $(this).attr('id');
        var type = $(this).html();

        $('.display_list1').html('<div id = "loading">loading...</div>')
        .load('index.php/list_all/non_renewed',
                {
                    id      : id,
                    type    : type
                },
            function(){
                
            }); //
    })
    $('#list-hlder2 .file').live('click', function(){
        var id = $(this).attr('id');
        var type = $(this).html();

        $('.display_list2').html('<div id = "loading">loading...</div>')
        .load('index.php/list_all/revoke',
                {
                    id      : id,
                    type    : type
                },
            function(){
                
            }); //

           
    })

    $('.display_list #myTable tr').live('click', function(){
        var id = $(this).attr('id');
        switch($(this).attr('class'))

        {
            case 'pharmacist':
                break;
            case 'pharmrep':
                break;
            case 'pharmtec':
                break;
            case 'premises':
                break;
        }
    })
    
}

/*
 *function updated list
 **/

function updated_list()

{
    $('#app_list').live('click', function(){
        $('#slide-list').show();

        return false;
    })

    $('#slide-list').live('click', function(){
        $(this).hide();        
    })

    $('#slide-list li').live('click', function(){ //drop down menu for the list items

        switch($(this).attr('id'))

        {
            case '1':
                $('#application-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/list_renewed_license', function(){
                    $('#county-tree').treeview({
                    collapsed: true,
                    animated: "fast"

                });
                });
                break;

           case '2':
               $('#application-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/list_renewed_license/un_renewed', function(){
                    $('#county-tree').treeview({
                        collapsed: true,
                        animated: "fast"

                    });
                });
               break;
           case '3':
               $('#application-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/list_renewed_license/revoked', function(){
                    $('#county-tree').treeview({
                        collapsed: true,
                        animated: "fast"

                    });
                });
            case '4':
               $('#application-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/list_renewed_license/blacklist', function(){
                    $('#county-tree').treeview({
                        collapsed: true,
                        animated: "fast"

                    });
                });
               break;
            
        }
    })
}

/*
 *function create advanced list of the admin side
 **/

function advanced_list() //when tree is clicked on the admin side

{
    $('#list-cnt tr').live('click', function(){

        var category = $(this).attr('class');
        var id = $(this).attr('id');
        if($('#list-cnt').attr('class') == 'logged'){
            pull_back();
            $('#app-sup').slideDown('slow');
            $('#close h1').html('Detailed List');
            $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
            .load('index.php/list_renewed_license/detailed',
                {
                    category    : category,
                    id          : id

                }
            );
        }

    })

    $('.text').live('click', function(){
        var id = $(this).attr('id');
        $('#pop-text').slideDown('slow');
        $('#txt-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/list_renewed_license/inspection_text',
            {
                id  :   id
            });
    })

    $('#close-txt').button();//

    $('#close-txt').live('click', function(){
        $('#pop-text').slideUp('slow');
    })
    
}

/*
 *pull list of unrewed practitioners from the admin side when phamacist etc menu clicked
 **/

function ajax_unrenewed_list()

{
    $('.un_renewed').live('hover', function(){
        $('.un_renewed').css('color', '#000')
        $(this).css('cursor', 'pointer');
        $(this).css('color', ' blueviolet');
    })

    $('.un_renewed').live('click', function(){
        var id      = $(this).attr('id');
        var type    = $(this).html();

        //fetch list from the server
        $('#list-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/public_list/unrenewe_list',
                {
                    id      : id,
                    type    : type
                },
            function(){
                
            }); //
    })
    
}
/*
 *pull list of revoked practitioners from the admin side when phamacist etc menu clicked
 **/

function ajax_revoked_list()

{
    $('.revoked').live('hover', function(){
        $('.revoked').css('color', '#000')
        $(this).css('cursor', 'pointer');
        $(this).css('color', ' blueviolet');
    })

    $('.revoked').live('click', function(){
        var id      = $(this).attr('id');
        var type    = $(this).html();

        //fetch list from the server
        $('#list-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/public_list/revoked_list',
                {
                    id      : id,
                    type    : type
                },
            function(){
                
            }); //
    })

}

/*
 *function to manupulate the reports section of the admin side
 **/

function reports()

{
    $('#app_reports').live('click', function(){

        $('#application-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/reports', function(data){
            $('#rept-hd a').button();
        });

        return false;
    })

    /*
     *event when the filter button is clicked
     **/

    $('#filter_rpt').live('click', function(){

        var year = $('input[name=filter_report]').val();

        if($('#report_id').html() == 1)
            {
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/reports/normal_filter/'+year+'', function(data){
                    $('#rept-hd a').button();
                });
                
            }
            else
                {                   
                    var county = $('#report_id').attr('class');

                    $('#list-cnt').html('<div id = "loading">loading...</div>')
                    .load('index.php/reports/compleate/'+year+'/'+county+'', function(data){
                    $('#rept-hd a').button();
                });
                }

       

        return false;
    })

     /*
      *get the report for every county
      *
      **/

        $('#rpt_cntnt li').live('click', function(){

            var contx = $(this).attr('id');

            $('#list-cnt').html('<div id = "loading">loading...</div>')
             .load('index.php/reports/normal_county/',
             {
                 cnt : contx
             },
                 function(){
                    $('#rept-hd a').button();
                });
        })

        /*
         *get the audit trail
         **/

        $('#audit_tr').live('click', function(){

            $('#list-cnt').html('<div id = "loading">loading...</div>')
            .load('index.php/reports/audit_trail/');

            return false;
        })
}

/*
 *function to controll the setting part of the admnistrative area
 **/

function setting()

{
    $('#rpt_cntnt2 li').live('click', function(){

        switch($(this).attr('id'))
        {
            case '1':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/settings/users_online');
                
                break;
            case '2':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/settings/add_user', function(){
                    $('input[name=sub_user]').button();
                });

                break;
            case '3':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/settings/edit_user');

                break;
            case '4':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/settings/delete_user');

                break;
            case '5':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/settings/computer_devices');

                break;
            case '6':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/csv/read_csv', function(){
                    $("#tabs").tabs();
                });

                break;
        }
    })

    //delete user event
    $('#delete_user tr').live('click', function(){
        var del = confirm("Do you want to delete this user");
        var id  = $(this).attr('id');

        if(del == true)
            {
                alert(id);
                 $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/settings/delete_user2',
                    {
                        id  :   id
                    });
            }
    })

    //on click the edit users row pull div to edit the user

    $('#edit_user tr').live('click', function(){

        var name    = $(this).attr('class');
        var id      = $(this).attr('id');
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Edit '+name);
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/settings/edit_userDB_1',   
            {
                id      :   id
           
            }, function(){

            $('#app-sup-cnt a').button();
            $('input[name=save_xxxx]').button();
        });
        
    })

    //change the access level of the user
   $('#usraccess').live('click', function(){
        var user = $(this).attr('href');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/settings/edit_access/'+user+'', function(){
            $('#app-sup-cnt a').button();
            $('input[name=edit_access]').button();
        });
        return false;
    })
}


/*
 *function to controll the editing of practitioners
 **/
function edit_practitioner()
{
    //event when practitioner menu is clicked pull pages for editing

    $('.edit_p').live('click', function(){
        switch($(this).attr('id')){
            case 'p1':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/edit/pharmacist/');
                break;
            case 'p2':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/edit/pharmrep/');
                break;
            case 'p3':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/edit/pharmtec/');
                break;
            case 'p4':
                $('#list-cnt').html('<div id = "loading">loading...</div>')
                .load('index.php/edit/premises/');
                break;
        }
    })

    //edit pharmacist
    $('.xp1').live('click', function(){
        var id      = $(this).attr('id');
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Edit Pharmacist');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/edit_pharmacist',
            {
                id      :   id
            }
            , function(){

            $('input[name=xsave]').button();
            $('#a_photo').button();
        });
    })
    //change pharmacist photo
    $('#a_photo').live('click', function(){
        var id      = $(this).attr('href');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/pharmacist_photo',
            {
                id      :   id
            }
            , function(){

            $('input[name=xsave]').button();
            $('#a_photo').button();
        });
        return false;
    })

    //edit pharmrep
    $('.xp2').live('click', function(){
        var id      = $(this).attr('id');
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Edit Pharmrep');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/edit_pharmrep',
            {
                id      :   id
            }
            , function(){

            $('input[name=xsave]').button();
            $('#b_photo').button();
        });
    })
    //change pharmrep photo
    $('#b_photo').live('click', function(){
        var id      = $(this).attr('href');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/pharmrep_photo',
            {
                id      :   id
            }
            , function(){
            
            $('input[name=xsave]').button();
            $('#b_photo').button();
        });
        return false;
    })

//edit pharmtec
    $('.xp3').live('click', function(){
        var id      = $(this).attr('id');
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Edit Pharmtec');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/edit_pharmtec',
            {
                id      : id
            }
            , function(){

            $('input[name=xsave]').button();
            $('#c_photo').button();
        });
    })
    //change pharmtec photo
    $('#c_photo').live('click', function(){
        var id      = $(this).attr('href');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/pharmtec_photo',
            {
                id      : id
            }
            , function(){

            $('input[name=xsave]').button();
            $('#c_photo').button();
        });
        return false;
    })

    //edit premises
    $('.xp4').live('click', function(){
        var id      = $(this).attr('id');
        pull_back();

        $('#app-sup').slideDown('slow');
        $('#close h1').html('Edit Premises');
        $('#app-sup-cnt').html('<div id = "loading">loading...</div>')
        .load('index.php/edit/edit_premises',
            {
                id      :   id
            }
            , function(){

            $('input[name=xsave]').button();
            $('#c_photo').button();
        });
    })
}
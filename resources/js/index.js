import {cardController} from './controllers/card_controller';
import {importController} from './controllers/import_controller';


$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    const home_route  = new RegExp("\/home",'gm');
    const import_route  = new RegExp("\/import/json",'gm');
    const pathName = window.location.pathname;
    switch(true){
        case home_route.test(pathName):
            cardController();
            break;
        case import_route.test(pathName):
            importController();
            break;
        default:
            console.log("Cannot find route");
            break;                                                                                                                                                                                                                        
    }

});
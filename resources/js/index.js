import {cardController} from './controllers/card_controller';


$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    const home_route  = new RegExp("\/",'gm');
    const pathName = window.location.pathname;

    switch(true){
        case home_route.test(pathName):
            cardController();
            break;
        default:
            console.log("Cannot find route");
            break;
    }

});
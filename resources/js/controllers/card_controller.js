export const cardController = () => {

 $('#search-job').on('keypress',(e)=>{
    let search = $(e.currentTarget).val();
    if(e.which == 13){
      $.get(`/home/${search}`, (data)=>{
        $('.job-list').html(data.jobs);
        $('.endless-pagination').data('next-page', data.next_page);
      });
    }
 });
//    $(window).scroll(loadMore);
    function loadMore(){
          let page = $('.endless-pagination').data('next-page');
          if(page != null){
              clearTimeout($.data(this, "scrollCheck"));
              $.data(this, "scrollCheck", setTimeout(function(){
                var scroll_position_load_post = $(window).height() + $(window).scrollTop() + 100;
                if(scroll_position_load_post >= $(document).height()){
                    $.get(page, function(data){
                         $('.job-list').append(data.jobs);
                         $('.endless-pagination').data('next-page', data.next_page);
                    });
                }
              }, 350));

          }

      
        
    }

   
   
}
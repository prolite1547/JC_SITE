export const cardController = () => {

  // ONLY FOR GOOGLE CHROME USERSSSSS
// $('input[type=search]').on('search', function (e) {
//   let search = $(e.currentTarget).val();
//   if(search == ''){
//       search = 'all';
//       $('.filter').css('display','none');
//       $('.filter-text').html('');
//   }else{
//       $('.filter').css('display','block');
//       $('.filter-text').html(search);
//   }
//     filterCards(search);
//     $("html, body").animate({ scrollTop: 0 }, "slow");
// });
 $('#search-job').on('keypress',(e)=>{
    let search = $(e.currentTarget).val();
    if(e.which == 13){
      if(search == ''){
        search = 'all';
        $('.filter').css('display','none');
        $('.filter-text').html('');
      }else{
        $('.filter').css('display','block');
        $('.filter-text').html(search);
      }
      filterCards(search);
      $("html, body").animate({ scrollTop: 0 }, "slow");
    }
 });

 $('.btn-search').on('click',()=>{
    let txtsearch = $('#search-job').val();
    if(txtsearch == ''){
      search = 'all';
    }
    filterCards(txtsearch)
 });



   $(window).scroll(loadMore);
    function loadMore(){
          let page = $('.endless-pagination').data('next-page');
          if(page != null){
              clearTimeout($.data(this, "scrollCheck"));
              $.data(this, "scrollCheck", setTimeout(function(){
                var scroll_position_load_post = $(window).height() + $(window).scrollTop() + 100;
                if(scroll_position_load_post >= $(document).height()){

                    $.ajax(page, {
                      type: 'GET',
                      data : '',
                      beforeSend: () =>{
                          $('.loader').insertAfter('.job-list');
                          $('.loader').css('display', 'block');
                      },
                      success : (data)=>{
                        $('.loader').css('display', 'none');
                        $('.job-list').append(data.jobs);
                        $('.endless-pagination').data('next-page', data.next_page);
                      }
                    });
                    // $.get(page, function(data){
                    //      $('.job-list').append(data.jobs);
                    //      $('.endless-pagination').data('next-page', data.next_page);
                    // });
                }
              }, 350));

          }
    }

    function filterCards(search){
      $.get(`/home/${search}`, (data)=>{
        $('.job-list').html(data.jobs);
        $('.endless-pagination').data('next-page', data.next_page);
      });
    }

   
   
}
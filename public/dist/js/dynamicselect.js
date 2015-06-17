var protocol,host, base_url;

protocol = window.location.protocol;
host = window.location.host;

base_url = host;

function formatState (state) {
  if (!state.id) { return state.text; }
  var $state = $(
    '<span><img src="'+state.url+'" /> ' + state.text + '</span>'
  );
  return $state;
};

function formatResult(node) {
  console.log("nombre", node.name)
    return '<div>' + node.name + '</div>';
};

function formatSelection(node) {
    return node.id;
};

$("#inputImages").select2({     
     /**templateResult: formatState*/
     tags: true,
     ajax: {
         url: "http://"+base_url+"/admin/images",
         dataType: 'json',         
         processResults: function (data, page) {
           // parse the results into the format expected by Select2.
           // since we are using custom formatting functions we do not need to
           // alter the remote JSON data
           //console.log("midata",data);
           var results = [];
            $.each(data, function(index, item){
              results.push({
                id: item.id,
                text: item.name
              });
            });
           return {
             results: results
           };
         },         
         templateResult: formatState,
         cache: true
   },
           

});

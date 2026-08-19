
document.addEventListener("DOMContentLoaded", function(){
  document.querySelectorAll("[data-confirm]").forEach(function(el){
    el.addEventListener("click", function(e){
      if(!confirm(el.dataset.confirm || "Are you sure?")) e.preventDefault();
    });
  });
  document.querySelectorAll("form").forEach(function(form){
    form.addEventListener("submit", function(e){
      e.preventDefault();
    });
  });
});

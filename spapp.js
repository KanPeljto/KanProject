var app = $.spapp({
    defaultView  : "#view_xxx",
    templateDir  : "public",
    pageNotFound : "error_404"
  });
  
  app.route({
    view : "view_1",
    load : "view_xxx.html",
    onCreate: function() {  },
    onReady: function() {  }
  });
  
  app.run();
console.log("The Script is L-l-loooooadiiiiing");


  
  const demoBaseConfig = {
    selector: '.js-tinymce',
    width: 755,
    height: 500,
    menubar: false,
      plugins:
        "anchor autolink  codesample  link lists searchreplace table visualblocks wordcount",
      toolbar:
        "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | align lineheight | numlist bullist indent outdent |   removeformat",
      content_style:
        "body { font-family:Helvetica,Arial,sans-serif; font-size:16px }",
  };
  
  tinymce.init(demoBaseConfig);
 
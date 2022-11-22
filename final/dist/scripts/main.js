console.log("Script Loaded");

// function initTinyMce() {
//     tinymce.init({
//       selector: ".js-tinymce",
//       height: 500,
//       menubar: false,
//       plugins: [
//         "advlist autolink lists link image charmap print preview anchor",
//         "searchreplace visualblocks code fullscreen",
//         "insertdatetime media table paste code help wordcount",
//       ],
//       toolbar:
//         "undo redo | formatselect | " +
//         "bold italic backcolor | alignleft aligncenter " +
//         "alignright alignjustify | bullist numlist outdent indent | " +
//         "removeformat | help",
//       content_style:
//         "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
//     });
//   }
  
//   initTinyMce();


  const demoBaseConfig = {
    selector: '.js-tinymce',
    width: 755,
    height: 500,
    resize: false,
    autosave_ask_before_unload: false,
    powerpaste_allow_local_images: true,
    plugins: [
      'a11ychecker', 'advcode', 'advlist', 'anchor', 'autolink', 'codesample', 'fullscreen', 'help',
      'image', 'editimage', 'tinydrive', 'lists', 'link', 'media', 'powerpaste', 'preview',
      'searchreplace', 'table', 'template', 'tinymcespellchecker', 'visualblocks', 'wordcount'
    ],
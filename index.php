<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="editor-container" style="width:800px;height:600px;border:1px solid grey"></div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.min.js"></script>
<script>
    require.config({
        paths: {
            'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs'
        }
    });
    require(['vs/editor/editor.main'], function() {
        let editor = monaco.editor.create(document.getElementById('editor-container'), {
            value: '',
            language: 'markdown'
        });
    });
</script>

</html>
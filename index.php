<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen flex-col bg-sky-500 lg:flex-row px-5 lg:px-5 py-5 lg:py-2">
        <div id="editor-container" class="w-full lg:w-1/2  h-1/2 md:h-3/4 lg:h-full" style="border:1px solid grey"></div>
        <div class="w-full lg:w-1/2 h-1/2 md:h-3/4 lg:h-full" style="border:1px solid grey">
        <div class="pt-3 flex justify-center">
            <button class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                Preview
            </button>
            <button class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                HTML
            </button>
            <button class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                Highlihgt : ON
            </button>
            <button class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                Download
            </button>
        </div>
        </div>
    </div>
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
            language: 'md'
        });
        let viwer = monaco.editor.create(document.getElementById('editor-container1'), {
            value: '',
            language: 'html'
        });
    });
</script>

</html>
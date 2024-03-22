<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>MarkDown To HTML Converter</title>
    <link rel="stylesheet" href="./src/css/style.css">
</style>
</head>

<body>
    <div class="prose flex h-screen flex-col lg:flex-row px-5 lg:px-5 py-5 lg:py-2">
        <div id="editor-container" class="w-full lg:w-1/2  h-1/2 md:h-3/4 lg:h-full" style="border:1px solid grey">
        </div>
        <div class="w-full lg:w-1/2 h-1/2 md:h-3/4 lg:h-full overflow-scroll" style="border:1px solid grey">
            <div class="p-3 flex items-center justify-center sticky top-0 bg-white">
                <button id="preview" class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                    Preview
                </button>
                <button id="html" class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                    HTML
                </button>
                <button id="highlight" value="on" class="bg-transparent mx-1 font-semibold py-1 px-2 border hover:bg-blue-500 text-blue-700  hover:text-white  border-blue-500 hover:border-transparent rounded">
                    Highlight : ON
                </button>
                <button id="download" class="bg-transparent mx-1 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-2 border border-blue-500 hover:border-transparent rounded">
                    Download
                </button>
            </div>
            <div id="converted-ele" class="p-2 ">
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.min.js"></script>
<script src="./src/main.js"></script>

</html>
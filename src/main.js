require.config({
    paths: {
        'vs': 'https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs'
    }
});

require(['vs/editor/editor.main'], function () {
    let editor = monaco.editor.create(document.getElementById('editor-container'), {
        value:
            '## 見出し\n' +
            '\n' +
            'Markdownを使ってみよう\n' +
            '============\n' +
            '\n' +
            'Markdonwとは？\n' +
            '------------\n' +
            '\n' +
            '### 引用\n' +
            '\n' +
            '>Markdown（マークダウン）は、文書を記述するための軽量マークアップ言語のひとつである。\n' +
            '>本来はプレーンテキスト形式で手軽に書いた文書からHTMLを生成するために開発されたものである。\n' +
            '>しかし、現在ではHTMLのほかパワーポイント形式やLATEX形式のファイルへ変換する\n' +
            '>ソフトウェア（コンバータ）も開発されている。\n' +
            '>各コンバータの開発者によって多様な拡張が施されるため、各種の方言が存在する。\n' +
            '\n' +
            '\n' +
            '### リンク\n' +
            '\n' +
            '[Wiki:Markdown](https://ja.wikipedia.org/wiki/Markdown):WikiのMarkdownのページ\n' +
            '\n' +
            '### 強調\n' +
            '\n' +
            '*ここがemタグで強調されます*  \n' +
            '_ここがemタグで強調されます_  \n' +
            '**ここがstrongタグで強調されます**  \n' +
            '__ここがstrongタグで強調されます__  \n' +
            '\n' +
            '\n' +
            '### リスト\n' +
            '\n' +
            '- フシギダネ\n' +
            '- フシギソウ\n' +
            '- フシギバナ\n' +
            '\n' +
            '\n' +
            '### テーブル  \n' +
            '\n' +
            '| A列$out | B列 | C列 |D列|E列|\n' +
            '|-----|:---:|-----|--:|---|\n' +
            '| あ  | い  | う  |え |お |\n' +
            '| か  | き  | く  |け |こ |\n' +
            '| さ  | し  | す  |せ |そ |\n' +
            '\n' +
            '\n' +
            '### プログラムを記述する場合  \n' +
            '\n' +
            '```py\n' +
            'def scope_test():\n' +
            '    def do_local():\n' +
            '        spam = "local spam"\n' +
            '\n' +
            '    def do_nonlocal():\n' +
            '        nonlocal spam\n' +
            '        spam = "nonlocal spam"\n' +
            '\n' +
            '    def do_global():\n' +
            '        global spam\n' +
            '        spam = "global spam"\n' +
            '\n' +
            '    spam = "test spam"\n' +
            '    do_local()\n' +
            '    print("After local assignment:", spam)\n' +
            '    do_nonlocal()\n' +
            '    print("After nonlocal assignment:", spam)\n' +
            '    do_global()\n' +
            '    print("After global assignment:", spam)\n' +
            '\n' +
            'scope_test()\n' +
            'print("In global scope:", spam)\n' +
            '```\n',
        // ,
        language: 'markdown'
    });

    editor.onDidChangeModelContent((event) => {
        console.log("テキストが変更されました。");
        let value = editor.getValue();
        updateRender(value)
    });
});


function updateRender(value) {
    const requet = new Request("../convert.php", {
        method: "POST",
        headers: {
            "Content-Type": "text/plain",
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "markdown=" + value,
    })

    fetch(requet)
        .then(response => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text(); // レスポンスをテキスト形式で取得
        })
        .then(data => {
            console.log(data);
            document.getElementById("converted-ele").innerHTML = data;
            // console.log(document.getElementById("converted-ele").innerHTML = data)
        })
        .catch(error => {
            console.error("There was a problem with the fetch operation:", error);
        });
}



let highlight = document.getElementById("highlight");
highlight.addEventListener("click", (e) => {
    if (e.target.value == "on") {
        e.target.value = "off";
        highlight.innerHTML = "Highlight : OFF";
        // highlight.classList.remove("")
    }
    else {
        e.target.value = "on";
        highlight.innerHTML = "Highlight : ON";
    }
})
import sys
import markdown
import os


class FileConverter:
    inputCommand = sys.argv
    @staticmethod
    def convert():
        if (len(FileConverter.inputCommand) <= 1):
            print("need argments")
        else:        
            config = {
    'codehilite': {
        'noclasses': False,  # CSS クラスを有効にする
    }
}
            
            convert_param = FileConverter.inputCommand[1]
            highlight = FileConverter.inputCommand[2]
            if (highlight == "on"):
                md = markdown.Markdown(extensions=['markdown.extensions.tables', "sane_lists", "toc", 'fenced_code', 'codehilite',], extension_configs=config)
                print(md.convert(convert_param))
            else:
                htmlData = markdown.markdown(convert_param, extensions=['markdown.extensions.tables', "sane_lists", "toc"])
                print(htmlData)
            
            # return htmlData
                    
def main():
    FileConverter.convert()
    
if __name__ == "__main__":
    main()
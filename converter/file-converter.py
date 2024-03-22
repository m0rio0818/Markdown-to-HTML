import sys
import markdown
import os


class FileConverter:
    md = markdown.Markdown()
    inputCommand = sys.argv;
    @staticmethod
    def convert():
        if (len(FileConverter.inputCommand) <= 1):
            print("need argments")
        else:
            # print(FileConverter.inputCommand)
            convert_param = FileConverter.inputCommand[1]
            htmlData = FileConverter.md.convert(convert_param)
            print(htmlData)
            # return htmlData
                    
def main():
    FileConverter.convert()
    
if __name__ == "__main__":
    main()
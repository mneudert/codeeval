using System;
using System.IO;
using System.Linq;
using System.Collections.Generic;

class Program
{
    private static Dictionary<string, string> _morseMap = new Dictionary<string, string>()
    {
        {".-",    "A"},
        {"-...",  "B"},
        {"-.-.",  "C"},
        {"-..",   "D"},
        {".",     "E"},
        {"..-.",  "F"},
        {"--.",   "G"},
        {"....",  "H"},
        {"..",    "I"},
        {".---",  "J"},
        {"-.-",   "K"},
        {".-..",  "L"},
        {"--",    "M"},
        {"-.",    "N"},
        {"---",   "O"},
        {".--.",  "P"},
        {"--.-",  "Q"},
        {".-.",   "R"},
        {"...",   "S"},
        {"-",     "T"},
        {"..-",   "U"},
        {"...-",  "V"},
        {".--",   "W"},
        {"-..-",  "X"},
        {"-.--",  "Y"},
        {"--..",  "Z"},
        {"-----", "0"},
        {".----", "1"},
        {"..---", "2"},
        {"...--", "3"},
        {"....-", "4"},
        {".....", "5"},
        {"-....", "6"},
        {"--...", "7"},
        {"---..", "8"},
        {"----.", "9"}
    };

    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string line = reader.ReadLine();

            if (null == line)
            {
                continue;
            }

            Console.WriteLine(_decode(line));
        }
    }

    private static string _decode(string line)
    {
        return string.Join(
            string.Empty,
            line.Split(' ').Select( c => _decodeChar(c) )
        );
    }

    private static string _decodeChar(string c)
    {
        if (0 == c.Length)
        {
            return " ";
        }

        return _morseMap[c];
    }
}

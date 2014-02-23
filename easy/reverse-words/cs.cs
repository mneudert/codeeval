using System;
using System.IO;

class Program
{
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

            string[] words = line.Split(' ');

            Array.Reverse(words);
            Console.WriteLine(string.Join(" ", words));
        }
    }
}

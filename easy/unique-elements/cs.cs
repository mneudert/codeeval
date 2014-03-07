using System;
using System.IO;
using System.Linq;

class Program
{
    static void Main(string[] args)
    {
        using (StreamReader reader = File.OpenText(args[0]))

        while (!reader.EndOfStream)
        {
            string elements = reader.ReadLine();

            if (null == elements)
            {
                continue;
            }

            Console.WriteLine(
                string.Join(
                    ",",
                    elements.Split(',').Distinct()
                )
            );
        }
    }
}

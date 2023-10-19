internal class Program
{
    private static void Main(string[] args)
    {
        
    }

    public void NewUserData(string fullname, string cpf, string dataBirth, string card)
    {
        string[] AllData = { $"fullname = {fullname}\ncpf = {cpf}\ndataBirth = {dataBirth}\ncard = {card}" };

        string Path = "core/php/db/Users";

        // Write the string array to a new file named "WriteLines.txt".
        using (StreamWriter outputFile = new StreamWriter(Path.Combine(Path, cpf + ".txt")))
        {
            foreach (string line in AllData)
                outputFile.WriteLine(line);
        }
    }
}
import java.util.*;
import java.io.*;
public class CandidateManager {
    private ArrayList<Candidate> list;
    public CandidateManager()
    {
        this.list=new ArrayList<>();
    }   
    public boolean readData(String fileName)
    {
        try{
            File in = new File(fileName);
            Scanner input = new Scanner(in);
            while (input.hasNext()){
                String a[] = input.nextLine().split("\\|");
                for(int i=0;i<a.length;i++){
                    a[i]=a[i].trim();
                }
                
                int year= Integer.parseInt(a[4]);
                int priority=Integer.parseInt(a[5]);
                
                Candidate abc = new Candidate(a[0],a[1],a[2],a[3],year,priority);
                this.list.add(abc);
              
            }
            
            return true;
        } catch (Exception ex){
            ex.printStackTrace();
            return false;
        }
    }
    public ArrayList<Candidate> getSelectionCandidates(String selection)
    {
        ArrayList<Candidate> result = new ArrayList<Candidate>();
        for(Candidate i : this.list){
        
            if (i.getSelection().equals(selection)) result.add(i);
        }
        return result;
    } 
    public ArrayList<Candidate> getPriorityCandidates()
    {
        ArrayList<Candidate> result = new ArrayList<Candidate>();
       
        for(Candidate i : this.list){
        
            if (i.getPriority() == 1) result.add(i);
        }
        return result;
    }


    public ArrayList<Candidate> sortByName()
    {
        ArrayList<Candidate> result = this.list;
        Collections.sort(result,new Comparator<Candidate>(){
            @Override
            public int compare(Candidate c1,Candidate c2){
                return c1.getName().compareTo(c2.getName());
            }
        });
        return result;
    }

    public ArrayList<Candidate> getSecondYoungestCandidates()
    {
        ArrayList<Candidate> result= new ArrayList<Candidate>();
        int max=0;
        int second = 0;
        for(Candidate i : this.list){
            if (i.getYear() > max) max=i.getYear();
        }
        for(Candidate i : this.list){
            if (i.getYear() > second && i.getYear() != max) second=i.getYear();
                
            
        }
        for(Candidate i : this.list){
            if (i.getYear() == second ) result.add(i);
        }
        System.out.println(max);
        System.out.println(second);
        return result;
    }
    public void printCandidatesFromArray(ArrayList<Candidate> candidates) {
        if (candidates == null) {
            return;
        }
        
        for (int i = 0; i < candidates.size(); i++) {
            candidates.get(i).print();
        }
    }
    public void printCandidates() {
        printCandidatesFromArray(this.list);
    }
    
    public static void main(String[] args) {
        CandidateManager candidateManager = new CandidateManager();
        candidateManager.readData("candidates.txt");
        
            
        // ArrayList<Candidate> selectionCandidates = candidateManager.getSelectionCandidates("A");
        // candidateManager.printCandidatesFromArray(selectionCandidates);
        // System.out.println();
        
        // ArrayList<Candidate> priorityCandidates = candidateManager.getPriorityCandidates();
        // candidateManager.printCandidatesFromArray(priorityCandidates);
        // System.out.println();
            
        // ArrayList<Candidate> sortedNameCandidates = candidateManager.sortByName();
        // candidateManager.printCandidatesFromArray(sortedNameCandidates);
        // System.out.println();
            
        ArrayList<Candidate> secondYoungestCandidates = candidateManager.getSecondYoungestCandidates();
        candidateManager.printCandidatesFromArray(secondYoungestCandidates);
    }
}
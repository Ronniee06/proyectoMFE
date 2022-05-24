
package matriz;

/*
 * @author fredy
 */
public interface Matriz {
    
   public Matriz suma(Matriz a , Matriz b);
   
   public Matriz resta(Matriz a , Matriz b);
   
   public Matriz productoEscalar(Matriz a , int num);
   
   public Matriz producto(Matriz a , Matriz b);
    
   public Matriz inversa(Matriz a); 
    
}

package matriz;

/*
 * @author fredy
 */
public class MatrizImpl implements Matriz {

    private int[] a;
    private int[] b;

    public MatrizImpl(int[] a, int[] b) {
        this.a = a;
        this.b = b;
    }

    public MatrizImpl(int[] a) {
        this.a = a;
    }
    
    
    @Override
    public Matriz suma(Matriz a , Matriz b) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Matriz resta(Matriz a , Matriz b) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Matriz productoEscalar(Matriz a, int num) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Matriz producto(Matriz a, Matriz b) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Matriz inversa(Matriz a) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
    
}

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package sumar;

/**
 *
 * @author SENA
 */
public class Interfaz extends javax.swing.JFrame {

    /**
     * Creates new form Interfaz
     */
    public Interfaz() {
        initComponents();
        this.setTitle("Calculadora (OᴥOʋ)");
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        num1 = new javax.swing.JTextField();
        num2 = new javax.swing.JTextField();
        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        jLabel3 = new javax.swing.JLabel();
        btnsuma = new javax.swing.JButton();
        resultado = new javax.swing.JTextField();
        jLabel4 = new javax.swing.JLabel();
        btnborrar = new javax.swing.JButton();
        btndivision = new javax.swing.JButton();
        btnmulti = new javax.swing.JButton();
        btnresta = new javax.swing.JButton();
        btnira = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        num1.setHorizontalAlignment(javax.swing.JTextField.LEFT);
        num1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                num1ActionPerformed(evt);
            }
        });

        num2.setHorizontalAlignment(javax.swing.JTextField.LEFT);
        num2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                num2ActionPerformed(evt);
            }
        });

        jLabel1.setFont(new java.awt.Font("Segoe UI", 0, 24)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(0, 153, 204));
        jLabel1.setText("Calculadora \t(OᴥOʋ)");

        jLabel2.setText("Numero 1");

        jLabel3.setText("Numero 2");

        btnsuma.setBackground(new java.awt.Color(0, 153, 204));
        btnsuma.setFont(new java.awt.Font("Segoe UI", 0, 14)); // NOI18N
        btnsuma.setText("Sumar");
        btnsuma.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnsumaActionPerformed(evt);
            }
        });

        resultado.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                resultadoActionPerformed(evt);
            }
        });

        jLabel4.setText("Resultado");

        btnborrar.setBackground(new java.awt.Color(255, 153, 153));
        btnborrar.setText("Borrar");
        btnborrar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnborrarActionPerformed(evt);
            }
        });

        btndivision.setBackground(new java.awt.Color(0, 153, 204));
        btndivision.setFont(new java.awt.Font("Segoe UI", 0, 14)); // NOI18N
        btndivision.setText("Division");
        btndivision.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btndivisionActionPerformed(evt);
            }
        });

        btnmulti.setBackground(new java.awt.Color(0, 153, 204));
        btnmulti.setFont(new java.awt.Font("Segoe UI", 0, 14)); // NOI18N
        btnmulti.setText("Multiplicacion");
        btnmulti.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnmultiActionPerformed(evt);
            }
        });

        btnresta.setBackground(new java.awt.Color(0, 153, 204));
        btnresta.setFont(new java.awt.Font("Segoe UI", 0, 14)); // NOI18N
        btnresta.setText("Resta");
        btnresta.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnrestaActionPerformed(evt);
            }
        });

        btnira.setBackground(new java.awt.Color(255, 153, 153));
        btnira.setText("Ir a Salarios ->");
        btnira.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btniraActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(59, 59, 59)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addComponent(jLabel4)
                        .addGap(29, 29, 29)
                        .addComponent(resultado, javax.swing.GroupLayout.PREFERRED_SIZE, 172, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(btnsuma)
                            .addComponent(btnmulti))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 91, Short.MAX_VALUE)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(btnresta)
                            .addComponent(btndivision))
                        .addGap(74, 74, 74))))
            .addGroup(layout.createSequentialGroup()
                .addGap(170, 170, 170)
                .addComponent(btnborrar)
                .addGap(0, 0, Short.MAX_VALUE))
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(jLabel1)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addGap(29, 29, 29)
                                .addComponent(jLabel2))
                            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                                .addContainerGap()
                                .addComponent(jLabel3)))
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                            .addComponent(num1, javax.swing.GroupLayout.DEFAULT_SIZE, 227, Short.MAX_VALUE)
                            .addComponent(num2))))
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGap(0, 0, Short.MAX_VALUE)
                .addComponent(btnira)
                .addGap(169, 169, 169))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(52, 52, 52)
                .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 41, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(num1, javax.swing.GroupLayout.PREFERRED_SIZE, 61, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel2))
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(num2, javax.swing.GroupLayout.PREFERRED_SIZE, 61, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel3))
                .addGap(28, 28, 28)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnsuma, javax.swing.GroupLayout.PREFERRED_SIZE, 21, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(btnresta, javax.swing.GroupLayout.PREFERRED_SIZE, 21, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(34, 34, 34)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(btnmulti, javax.swing.GroupLayout.PREFERRED_SIZE, 21, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(btndivision, javax.swing.GroupLayout.PREFERRED_SIZE, 21, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(65, 65, 65)
                .addComponent(btnborrar)
                .addGap(18, 18, 18)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(resultado, javax.swing.GroupLayout.PREFERRED_SIZE, 97, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jLabel4))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 75, Short.MAX_VALUE)
                .addComponent(btnira)
                .addGap(48, 48, 48))
        );

        pack();
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void num2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_num2ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_num2ActionPerformed

    private void btnsumaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnsumaActionPerformed
        // TODO add your handling code here:
        int numero1=0;
        int numero2=0;
        int res=0;
        
        numero1=Integer.parseInt(num1.getText());
        numero2=Integer.parseInt(num2.getText());
        res=numero1+numero2;
        resultado.setText(res+"");
    }//GEN-LAST:event_btnsumaActionPerformed

    private void resultadoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_resultadoActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_resultadoActionPerformed

    private void btnborrarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnborrarActionPerformed
    num1.setText("");
    num2.setText("");
    resultado.setText("");
    }//GEN-LAST:event_btnborrarActionPerformed

    private void btndivisionActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btndivisionActionPerformed
        int numero1=0;
        int numero2=0;
        int res=0;
        
        numero1=Integer.parseInt(num1.getText());
        numero2=Integer.parseInt(num2.getText());
        res=numero1/numero2;
        resultado.setText(res+"");
    }//GEN-LAST:event_btndivisionActionPerformed

    private void btnmultiActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnmultiActionPerformed
        int numero1=0;
        int numero2=0;
        int res=0;
        
        numero1=Integer.parseInt(num1.getText());
        numero2=Integer.parseInt(num2.getText());
        res=numero1*numero2;
        resultado.setText(res+"");
    }//GEN-LAST:event_btnmultiActionPerformed

    private void btnrestaActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnrestaActionPerformed
        int numero1=0;
        int numero2=0;
        int res=0;
        
        numero1=Integer.parseInt(num1.getText());
        numero2=Integer.parseInt(num2.getText());
        res=numero1-numero2;
        resultado.setText(res+"");
    }//GEN-LAST:event_btnrestaActionPerformed

    private void btniraActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btniraActionPerformed
    salarios irsalario = new salarios();
    irsalario.setVisible(true);
    this.setVisible(false);
    }//GEN-LAST:event_btniraActionPerformed

    private void num1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_num1ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_num1ActionPerformed
/**
 * Salarios irsalario = new Salarios;
 * irsalario.setVisible(true);
 * this.setVisible(false);
 */
    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(Interfaz.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(Interfaz.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(Interfaz.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(Interfaz.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new Interfaz().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnborrar;
    private javax.swing.JButton btndivision;
    private javax.swing.JButton btnira;
    private javax.swing.JButton btnmulti;
    private javax.swing.JButton btnresta;
    private javax.swing.JButton btnsuma;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel4;
    private javax.swing.JTextField num1;
    private javax.swing.JTextField num2;
    private javax.swing.JTextField resultado;
    // End of variables declaration//GEN-END:variables
}
